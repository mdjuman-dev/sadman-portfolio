<div>
    @push('css')
    <style>
        .search-area {
            display: flex;
            gap: 8px;
            align-items: center;
            padding: 10px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.05);
        }

        .search-area input {
            flex: 1;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 8px 12px;
            font-size: 14px;
            outline: none;
        }

        .search-area button {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 8px 12px;
            border-radius: 6px;
            cursor: pointer;
        }

        .search-results {
            background: #f9f9f9;
            padding: 15px;
            margin-top: 15px;
            border-radius: 8px;
        }

        .single-result {
            padding: 8px 0;
            border-bottom: 1px solid #eaeaea;
        }

        .single-result:last-child {
            border-bottom: none;
        }

        .single-result a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: 0.3s;
        }

        .single-result a:hover {
            color: #007bff;
        }

        .disabled-link {
            opacity: 0.5;
            pointer-events: none;
            cursor: default;
        }
    </style>
    @endpush


    <div class="body">
        <div class="search-area">
            <input type="text" wire:model.live.300ms="search" placeholder="Search blog...">
            <button type="submit" style="position: relative; 
    transform: translateY(0%);">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>

        </div>
    </div>


    @if($search != '')
    @if($blogs->count())
    <div class="signle-side-bar recent-post-area" style="padding: 0;">
        <div class="body" style="padding:10px 0;">
            @foreach ($blogs as $blog)
            <a wire:navigate href="{{ route('blog.details', $blog->slug) }}" class="single-post">
                <span class="single-post-left">
                    <i class="fa-solid fa-arrow-right"></i>
                    <span class="post-title">{{ Str::limit($blog->title, 50) }}</span>
                </span>
            </a>
            @endforeach
        </div>
    </div>
    @else
    <span class="single-post-left mt-4">
        <span class="post-title">No Blog Found "{{ $search }}"</span>
    </span>
    @endif
    @endif
</div>