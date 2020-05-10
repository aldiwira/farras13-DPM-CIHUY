<div class="box-centering">
    <div class="page-wrapper">
        <div class="page-content text-center">
            <h1>Aspirasi anda sudah kami terima</h1>
            <p>Terima kasih sudah mengirimkan aspirasi</p>
            <br><br>
            <p>Bantu kita dalam mengembangkan website ini, dengan mengirimkan saran atau kritik dibawah ini</p>
            <form action="<?= base_url() ?>aspirasi/status" method="post">
                <div class="form-group">
                    <br><br>
                    <textarea name="aspirasi_input" class="form-control text-area-input" id="aspirasi-input"></textarea>
                </div>
                <button type="submit" name="send" value="tohome" class="btn btn-outline-warning btn-input">cancel</button>
                <button type="submit" name="send" value="saran" class="btn btn-primary btn-input">Submit</button>
            </form>
        </div>
    </div>
</div>