<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Write Product</h4>
        </div>
        <div class="card-body">
          <div class="mb-4 form-group row">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="mb-4 form-group row">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
            <div class="col-sm-12 col-md-7">
              <select class="form-control selectric">

                @foreach ($categories as $item)
                    <option></option>
                @endforeach



              </select>
            </div>
          </div>
          <div class="mb-4 form-group row">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
            <div class="col-sm-12 col-md-7">
              <textarea class="summernote-simple"></textarea>
            </div>
          </div>
          <div class="mb-4 form-group row">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
            <div class="col-sm-12 col-md-7">
              <div id="image-preview" class="image-preview">
                <label for="image-upload" id="image-label">Choose File</label>
                <input type="file" name="image" id="image-upload" />
              </div>
            </div>
          </div>
          <div class="mb-4 form-group row">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control inputtags">
            </div>
          </div>
          <div class="mb-4 form-group row">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
            <div class="col-sm-12 col-md-7">
              <select class="form-control selectric">
                <option>Publish</option>
                <option>Draft</option>
                <option>Pending</option>
              </select>
            </div>
          </div>
          <div class="mb-4 form-group row">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Create Post</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
