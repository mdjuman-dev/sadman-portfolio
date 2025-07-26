<div>
    @push('css')
    <style>
        .react-btn {
            border: none;
            background: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 16px;
            transition: 0.3s ease;
        }

        .react-btn i {
            font-size: 18px;
        }

        .react-btn:hover {
            opacity: 0.8;
        }

        .react-container {
            display: flex;
            gap: 20px;
        }
    </style>
    @endPush
    <ul class="react-container">
        <!-- Like Button -->
        <li>
            <button wire:click="react('like')" class="react-btn">
                @if($liked)
                <i class="fa-solid fa-thumbs-up" style="color:green;"></i>
                @else
                <i class="fa-regular fa-thumbs-up"></i>
                @endif
                <span>{{ $likeCount }}</span>
            </button>
        </li>

        <!-- Dislike Button -->
        <li>
            <button wire:click="react('dislike')" class="react-btn">
                @if($disliked)
                <i class="fa-solid fa-thumbs-down" style="color:red;"></i>
                @else
                <i class="fa-regular fa-thumbs-down"></i>
                @endif
                <span>{{ $dislikeCount }}</span>
            </button>
        </li>
    </ul>
</div>