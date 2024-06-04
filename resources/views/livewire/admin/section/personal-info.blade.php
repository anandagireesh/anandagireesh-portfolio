<div class="tab-pane show active" id="settings">
    <form wire:submit="updateAccountDetail">
        <h5 class="mb-4 text-uppercase"><i class="ri-contacts-book-2-line me-1"></i> Personal Info</h5>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="firstname" class="form-label">Name</label>
                    <input type="text" class="form-control" id="firstname" wire:model="name" placeholder="Enter first name">
                </div>
                <div>
                    @error('name')
                        <p class="text-danger">{{ $message }} </p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" wire:model="phone" placeholder="Enter phone">
                </div>
                <div>
                    @error('phone')
                        <p class="text-danger">{{ $message }} </p>
                    @enderror
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="userbio" class="form-label">Bio</label>
                    <textarea class="form-control" id="userbio" rows="4" placeholder="Write something..." wire:model="bio"></textarea>
                </div>
                <div>
                    @error('bio')
                        <p class="text-danger">{{ $message }} </p>
                    @enderror
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="useremail" class="form-label">Email Address</label>
                    <input type="email" class="form-control" disabled id="useremail" wire:model="email" placeholder="Enter email">
                    {{-- <span class="form-text text-muted"><small>If you want to change email please <a href="javascript: void(0);">click</a> here.</small></span> --}}
                </div>
                <div>
                    @error('email')
                        <p class="text-danger">{{ $message }} </p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="userRole" class="form-label">Role</label>
                    <input type="text" disabled class="form-control" wire:model="role" id="userRole">
                    {{-- <span class="form-text text-muted"><small>If you want to change password please <a href="javascript: void(0);">click</a> here.</small></span> --}}
                </div>
                <div>
                    @error('role')
                        <p class="text-danger">{{ $message }} </p>
                    @enderror
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="ri-building-line me-1"></i> Company Info</h5>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="companyname" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="companyname" wire:model="company_name" placeholder="Enter company name">
                </div>
                <div>
                    @error('company_name')
                        <p class="text-danger">{{ $message }} </p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="cwebsite" class="form-label">Website</label>
                    <input type="text" class="form-control" id="cwebsite" wire:model="website" placeholder="Enter website url">
                </div>
                <div>
                    @error('website')
                        <p class="text-danger">{{ $message }} </p>
                    @enderror
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="ri-global-line me-1"></i> Social</h5>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="social-fb" class="form-label">Facebook</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="ri-facebook-fill"></i></span>
                        <input type="text" class="form-control" id="social-fb" wire:model="facebook" placeholder="Url">
                    </div>
                    <div>
                        @error('facebook')
                            <p class="text-danger">{{ $message }} </p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="social-tw" class="form-label">Twitter</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="ri-twitter-line"></i></span>
                        <input type="text" class="form-control" id="social-tw" wire:model="twitter" placeholder="Username">
                    </div>
                    <div>
                        @error('twitter')
                            <p class="text-danger">{{ $message }} </p>
                        @enderror
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="social-insta" class="form-label">Instagram</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="ri-instagram-line"></i></span>
                        <input type="text" class="form-control" id="social-insta" wire:model="instagram" placeholder="Url">
                    </div>
                    <div>
                        @error('instagram')
                            <p class="text-danger">{{ $message }} </p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="social-lin" class="form-label">Linkedin</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="ri-linkedin-fill"></i></span>
                        <input type="text" class="form-control" id="social-lin" wire:model="linkedin" placeholder="Url">
                    </div>
                    <div>
                        @error('linkedin')
                            <p class="text-danger">{{ $message }} </p>
                        @enderror
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        {{-- <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="social-sky" class="form-label">Skype</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="ri-skype-line"></i></span>
                        <input type="text" class="form-control" id="social-sky" placeholder="@username">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="social-gh" class="form-label">Github</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="ri-github-line"></i></span>
                        <input type="text" class="form-control" id="social-gh" placeholder="Username">
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row --> --}}

        <div class="text-end">
            <button type="submit" class="btn btn-success mt-2"><i class="ri-save-line"></i> Save</button>
        </div>
    </form>
</div>
