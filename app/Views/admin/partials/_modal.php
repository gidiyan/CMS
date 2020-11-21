<div id="insertimageModal" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 50vw">
            <div class="modal-header d-flex">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title float-right text-info">Crop & Insert Image</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div id="image_crop"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-success crop_image img-fluid" data-model="<?= $resource ?>">Crop & Insert
                    Image
                </button>
            </div>
        </div>
    </div>
</div>