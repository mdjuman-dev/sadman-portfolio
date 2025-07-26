<div>
    <button wire:click="toggleLike" style="border:none;background:none;">
        @if($liked)
        <i class="fa-solid fa-heart" style="color:red;"></i>
        @else
        <i class="fa-regular fa-heart"></i>
        @endif
        <span>{{ $likeCount }}</span>
    </button>
</div>