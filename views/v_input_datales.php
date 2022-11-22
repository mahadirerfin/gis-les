<div class="col-sm-7">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Lokasi Les
        </div>
        <div class="panel-body">
        
        <div id="map" style="height: 500px;"></div>


        </div>
        
    </div>
</div>

<div class="col-sm-5">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Input Les
        </div>
        <div class="panel-body">
            <?php 
            echo validation_errors('<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>','</div>');
            echo form_open(); 
            ?>

            <div class="form-group">
                <label>Nama Les</label>
                <input name="nama_les" placeholder="Nama Les" value="<?= set_value('nama_les') ?>" class="form-control" />
                
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input name="alamat" placeholder="Alamat" value="<?= set_value('alamat') ?>" class="form-control" />
                
            </div>

            <div class="form-group">
                <label>Jenis Les</label>
                <input name="jenis_les" placeholder="Jenis Les" value="<?= set_value('jenis_les') ?>" class="form-control" />
                
                <!-- <select name="jenis_les" class="form-control">
                    <option value="Bahasa">Bahasa</option>
                    <option value="Olahraga">Olahraga</option>
                </select> -->
                

            </div>

            <div class="form-group">
                <label>Deskrips</label>
                <input name="deskripsi" placeholder="Deskripsi" value="<?= set_value('deskripsi') ?>" class="form-control" />
                
            </div>

            <div class="form-group">
                <label>Telepon</label>
                <input name="telepon" placeholder="Telepon" value="<?= set_value('telepon') ?>" class="form-control" />
                
            </div>

            <div class="form-group">
                <label>Latitude</label>
                <input id="Latitude" name="latitude" placeholder="Latitude" value="<?= set_value('latitude') ?>" class="form-control" />
                
            </div>

            <div class="form-group">
                <label>Longitude</label>
                <input id="Longitude" name="longitude" placeholder="Longitude" value="<?= set_value('longitude') ?>" class="form-control" />
                
            </div>

            <div class="form-group">
                <label></label>
                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                <button type="reset" class="btn btn-sm btn-success">Reset</button>
            </div>


            <?php echo form_close(); ?>

        </div>
        
    </div>
</div>





<script>
var curLocation=[0,0];
if (curLocation[0]==0 && curLocation[1]==0) {
	curLocation =[-7.966707124827504, 112.6335233943757];	
}

const map = L.map('map').setView([-7.966707124827504, 112.6335233943757], 14);

const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    // maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

map.attributionControl.setPrefix(false);
var marker = new L.marker(curLocation, {
	draggable:'true'
});

marker.on('dragend', function(event) {
var position = marker.getLatLng();
marker.setLatLng(position,{
	draggable : 'true'
	}).bindPopup(position).update();
	$("#Latitude").val(position.lat);
	$("#Longitude").val(position.lng).keyup();
});

$("#Latitude, #Longitude").change(function(){
	var position =[parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
	marker.setLatLng(position, {
	draggable : 'true'
	}).bindPopup(position).update();
	map.panTo(position);
});
map.addLayer(marker);

</script>