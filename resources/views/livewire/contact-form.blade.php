<!-- Tpm Get In touch start -->
<div class="col-lg-7">
    <div class="contact-inner">
        <div class="contact-form">
            <form wire:submit.prevent="submit" class="tmp-dynamic-form" id="contact-form">
                <div class="contact-form-wrapper row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input
                                class="input-field"
                                type="text"
                                placeholder="Your Name"
                                wire:model.defer="name"
                                required>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input
                                class="input-field"
                                type="number"
                                placeholder="Phone Number"
                                wire:model.defer="number"
                                required>
                            @error('number') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input
                                class="input-field"
                                type="email"
                                placeholder="Your Email"
                                wire:model.defer="email"
                                required>
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input
                                class="input-field"
                                type="text"
                                placeholder="Subject"
                                wire:model.defer="subject">
                            @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea
                                class="input-field"
                                placeholder="Your Message"
                                wire:model.defer="message"
                                required></textarea>
                            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="tmp-button-here">
                            <button
                                class="tmp-btn hover-icon-reverse radius-round w-100"
                                type="submit"
                                id="submit"
                                wire:loading.attr="disabled"
                                wire:target="submit">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">
                                        Appointment Now
                                        <span wire:loading wire:target="submit" class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>
                                    </span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
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
                    className: 'fa-solid fa-circle-check',
                    tagName: 'i',
                    color: 'white'
                }
            }]
        });

        window.addEventListener('success', () => {
            notyf.success({
                message: "Your message has been submitted successfully",
                icon: {
                    className: 'fa-solid fa-circle-check',
                    tagName: 'i',
                    color: 'white'
                }
            });
        });
    </script>
    @endpush

</div>
<!-- Tpm Get In touch End -->