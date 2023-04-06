<div class="card-body">
    <form wire:submit.prevent="baseSettingUpdate" enctype="multipart/form-data">
        <div class="form-group">
            <div class="row align-items-center">
                <div class="col-md-2 offset-md-2">
                    <label for="" class="form-label mb-0 font-weight-bold">
                        Site Title:
                    </label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Enter Title..." wire:model="title">
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row align-items-center">
                <div class="col-md-2 offset-md-2">
                    <label for="" class="form-label mb-0 font-weight-bold">
                        Favicon:
                    </label>
                </div>
                <div class="col-md-6">
                    <input type="file" class="form-control" wire:model="favicon">
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-success btn-round waves-effect waves-light">
                Save
            </button>
        </div>
    </form>
</div>
