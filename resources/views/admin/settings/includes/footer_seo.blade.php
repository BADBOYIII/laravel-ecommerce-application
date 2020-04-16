<div class="tile">
    <form action="{{ route('admin.settings.update') }}" method="post" role="form">
        @csrf
        <h3 class="tile-title">Footer &amp; SEO</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label for="footer_copyright_text" class="control-label">Footer Copyright Text</label>
                <textarea name="footer_copyright_text" id="footer_copyright_text" rows="4" class="form-control">{{ config('settings.footer_copyright_text') }}</textarea>
            </div>
            <div class="form-group">
                <label for="seo_meta_title" class="control-label">SEO Meta Title</label>
                <input type="text" class="form-control" placeholder="Enter seo meta title for store" id="seo_meta_title" name="seo_meta_title" value="{{ config('settings.seo_meta_title') }}" />
            </div>
            <div class="form-group">
                <label for="seo_meta_description" class="control-label">SEO Meta Description</label>
                <textarea name="seo_meta_description" id="seo_meta_description" rows="4" class="form-control" placeholder="Enter seo meta description for store">{{ config('settings.seo_meta_description') }}</textarea>
            </div>
        </div>
        <div class="tile-footer">
            <div class="row d-print-none mt-2">
                <div class="col-12 text-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Settings</button>
                </div>
            </div>
        </div>
    </form>
</div>
