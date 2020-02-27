<div id='strawberry-plant' data-fruit='12'></div>

<script>
// 'Getting' data-attributes using getAttribute
var plant = document.getElementById('strawberry-plant');
var fruitCount = plant.getAttribute('data-fruit'); // fruitCount = '12'

// 'Setting' data-attributes using setAttribute
plant.setAttribute('data-fruit','7'); // Pesky birds
</script>


<script>

  $(document).ready(function(){
    $(document).on('click', '#select', function(){
    var id_sepatu = $(this).data('id');
    var barcode = $(this).data('barcode');
    var nama_sepatu = $(this).data('nama');
    var id_merek = $(this).data('merek');
    var nama_merek = $(this).data('nama');


    $('#id_sepatu').val(id_sepatu);
    $('#barcode').val(barcode);
    $('#nama_sepatu').val(nama_sepatu);
    $('#id_merek').val(id_merek);
    $('#nama_merek').val(nama_merek);
    $('#modal-item').modal('hide');
});
});
</script>