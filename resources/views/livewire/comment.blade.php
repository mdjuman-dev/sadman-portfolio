<div>
    <div class="blog-details-form-wrapper tmponhover" style="padding: 30px;">
        <h4 class="title">Leave a comment</h4>
        <form wire:submit.prevent="submit" class="blog-details-form">
            <div class="row">
                <div class="single-input col-lg-6">
                    <label>Your Name</label>
                    <input wire:model="name" type="text" placeholder="Name" style="padding: 10px 20px;">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="single-input col-lg-6">
                    <label>Your Email</label>
                    <input wire:model="email" type="email" placeholder="Email" style="padding: 10px 20px;">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <label>Message</label>
            <textarea wire:model="message" placeholder="Message here.."></textarea>
            @error('message') <span class="text-danger">{{ $message }}</span> @enderror

            <div class="blog-submit-btn mt--40">
                <div class="tmp-button-here">
                    <button style="    height: 50px;" type="submit" class="tmp-btn hover-icon-reverse radius-round w-100">
                        <span style="    height: 20px;" class="icon-reverse-wrapper">
                            <span class="btn-text">Submit Now</span>
                            <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                            <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                        </span>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <h3 class="title mt-5">Comments ({{count($comments)}})</h3>
    @foreach ($comments as $comment)
    <div class="single-comment-audience">
        <div class="author-image tmponhover">
            <img style="border-radius:50%;" src="https://api.dicebear.com/9.x/initials/svg?seed={{$comment->name}}" alt="Corporate_business">
        </div>
        <div class="right-area-commnet">
            <div class="top-area-comment">
                <div class="left">
                    <h6 class="title">{{ $comment->name }}</h6>
                    <span>{{ time_short($comment->created_at) }}</span>
                </div>
            </div>
            <p class="disc">{{ $comment->message }}</p>
        </div>
    </div>
    @endforeach
    @push('scripts')
    <script>
        const notyf = new Notyf({
            duration: 5000,
            ripple: true,
            dismissible: true,
            position: {
                x: 'right',
                y: 'top',
            },
            types: [{
                type: 'success',
                background: 'green',
                icon: {
                    className: 'mdi mdi-check-circle-outline',
                    tagName: 'span',
                    color: 'white'
                }
            }]
        });

        window.addEventListener('comment-success', () => {
            notyf.success({
                message: "Comment submitted successfully!",
                icon: {
                    className: 'mdi mdi-check-circle-outline',
                    tagName: 'span',
                    color: 'white'
                }
            });
        });
    </script>
    @endpush
</div>