<div>
    <form wire:submit="updateAccountDetail" enctype="multipart/form-data">
        <!-- Title Input -->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" wire:model="title" required>
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Image Upload -->
        <div class="form-group mt-3">
            <label for="image">Upload Image</label>
            <input type="file" class="form-control-file" id="image" wire:model="image" accept="image/*" required>
            @error('image')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Category Selection -->
        <div class="form-group mt-3">
            <label for="category">Category</label>
            <select class="form-control" id="category" wire:model="category" required>
                <option value="">Select Category</option>
                <option value="Technology">Technology</option>
            </select>
            @error('category')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Quill Editor -->
        <div class="form-group mt-3">
            <label>Content</label>
            {{-- <div wire:ignore> --}}
                <div id="snow-editor" style="height: 300px;"></div>
            {{-- </div> --}}
            <input type="hidden" wire:model="content" id="content">
            @error('content')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>

<script src="{{ asset('assets/admin/vendor/quill/quill.min.js') }}"></script>
{{-- <script src="{{asset('assets/admin/js/pages/demo.quilljs.js')}}"></script> --}}

    <script>
        document.addEventListener('livewire:load', function () {
            var quill = new Quill('#snow-editor', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        [{ font: [] }, { size: [] }],
                        ['bold', 'italic', 'underline', 'strike'],
                        [{ color: [] }, { background: [] }],
                        [{ script: 'super' }, { script: 'sub' }],
                        [{ header: [1, 2, 3, 4, 5, 6, false] }, 'blockquote', 'code-block'],
                        [{ list: 'ordered' }, { list: 'bullet' }, { indent: '-1' }, { indent: '+1' }],
                        ['direction', { align: [] }],
                        ['link', 'image', 'video'],
                        ['clean']
                    ]
                }
            });

            quill.on('text-change', function () {
                @this.set('content', quill.root.innerHTML);
            });

            Livewire.hook('message.processed', (message, component) => {
                if (document.contains(quill.root) && @this.content !== quill.root.innerHTML) {
                    quill.root.innerHTML = @this.content;
                }
            });
        });
    </script>
{{-- @script --}}
{{-- <script>
    document.addEventListener('livewire:load', function() {
        var quill = new Quill("#snow-editor", {
            theme: "snow",
            modules: {
                toolbar: [
                    [{
                        font: []
                    }, {
                        size: []
                    }],
                    ["bold", "italic", "underline", "strike"],
                    [{
                        color: []
                    }, {
                        background: []
                    }],
                    [{
                        script: "super"
                    }, {
                        script: "sub"
                    }],
                    [{
                        header: [!1, 1, 2, 3, 4, 5, 6]
                    }, "blockquote", "code-block"],
                    [{
                        list: "ordered"
                    }, {
                        list: "bullet"
                    }, {
                        indent: "-1"
                    }, {
                        indent: "+1"
                    }],
                    ["direction", {
                        align: []
                    }],
                    ["link", "image", "video"],
                    ["clean"]
                ]
            }
        });


        quill.on('text-change', function() {
            alert(quill.root.innerHTML);
            @this.set('content', quill.root.innerHTML);
        });
    });
</script> --}}
{{-- @endscript --}}
