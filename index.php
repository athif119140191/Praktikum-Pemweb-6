<form id="form_angka">
	<label for="angka">
	Masukkan Angka
	<input type="number" name="angka" id="angka" autocomplete="off">
	</label>
</form>
<button id="btn_tampil"> Tampilkan </button>

<br>
<div id="tampil_data"></div>

<script src = "https://code.jquery.com/jquery-3.6.1.min.js"
	integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
	crossorigin = "anonymous">
</script>
<script>
	$(document).ready(function () {
		$("#btn_tampil").click(function () {
			var angka = $("#angka").val();
			$("#tampil_data").load("tampil.php",{angka: angka});
		});
	});
</script>