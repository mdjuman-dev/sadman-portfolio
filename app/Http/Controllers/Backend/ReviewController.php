<?php

namespace App\Http\Controllers\Backend;

use App\Models\Review;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    // Show form (for create or edit)
    public function index($id = null)
    {
        $editreview = null;
        if ($id) {
            $editreview = Review::findOrFail($id);
        }

        return view('backend.review.index', compact('editreview'));
    }

    // Show all reviews
    public function showReview()
    {
        $reviews = Review::paginate(12);
        return view('backend.review.show-review', compact('reviews'));
    }

    // Store or Update review
    public function storeOrUpdate(Request $request, $id = null)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'profetion' => 'required|string|max:255',
            'message'   => 'required|min:5',
            'image'     => 'nullable|image|mimes:jpg,jpeg,png,webp',
        ]);

        $review = Review::findOrNew($id);
        $review->name = $request->name;
        $review->profetion = $request->profetion;
        $review->message = $request->message;

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($review->image && Storage::disk('public')->exists($review->image)) {
                Storage::disk('public')->delete($review->image);
            }

            // Store new image
            $imageName = Str::slug($request->name) . '-' . time() . '.' . $request->image->extension();
            $imagePath = $request->file('image')->storeAs('reviews', $imageName, 'public');
            $review->image = $imagePath;
        }

        // Only set status if updating
        if ($id) {
            $review->status = $request->status ?? false;
        }

        $review->save();

        $msg = $id ? 'Review Updated Successfully' : 'Review Added Successfully';
        return redirect()->route('review.showReview')->with('success', $msg);
    }

    // Delete review
    public function delete($id)
    {
        $review = Review::findOrFail($id);

        // Delete image if exists
        if ($review->image && Storage::disk('public')->exists($review->image)) {
            Storage::disk('public')->delete($review->image);
        }

        $review->delete();

        return redirect()->back()->with('success', 'Review deleted successfully.');
    }
}
