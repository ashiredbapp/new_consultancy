
<div class="bootbox modal bootbox-confirm fade in" id="fullDownload" tabindex="-1" role="dialog" style="padding-right: 17px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="bootbox-close-button close cancel" data-dismiss="modal" aria-hidden="true" style="margin-top: -10px;">×</button>
                <div class="bootbox-body">
                    <div class="form-group-row">
                        <label for="emailforFullDownload" class="col-form-label">Enter E-Mail ID For You Want Data  :</label>
                        <div>
                            <input type="email" class="form-control emailFullDownload" name="email" required/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button data-bb-handler="cancel" type="button" class="btn btn-default cancel">Cancel</button>
                <button data-bb-handler="confirm" type="button" class="btn btn-primary submitFullDownload">Submit</button>
            </div>
        </div>
    </div>
</div>
<div class="bootbox modal bootbox-confirm fade in" id="download" tabindex="-1" role="dialog" style="padding-right: 17px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="bootbox-close-button close cancel" data-dismiss="modal" aria-hidden="true" style="margin-top: -10px;">×</button>
                <div class="bootbox-body">
                    <div>
                        <p class="text-success">
                            Only {{ config('global.excel_download_limit') }} Latest Records Will be Downloaded to Continue Press Download Button
                        </p>
                    </div>
                    <div>
                        <p class="text-warning">
                            Direct Download for more than {{ config('global.excel_download_limit') }} Records are Disabled Press Full Download Button to get Detailed Report
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button data-bb-handler="cancel" type="button" class="btn btn-default cancel">Cancel</button>

                <button data-bb-handler="confirm" type="button"  class="btn btn-success download" value="{{ config('global.excel_download_limit') }}">Download</button>

                <button data-bb-handler="confirm" type="button" class="btn btn-warning fullDownload">Full Download</button>
            </div>
        </div>
    </div>
</div>
