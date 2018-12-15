$(document).ready(function(){
    // $("#jenis_pakaian").change(function(){
    // 	var x = $('#jenis_pakaian').val(); 
    // 	x = x.split(",");
    //     $('#harga_jenis_pakaian').val(x[1]);
    //   });
    function compute(){
    	var total = 10000;
    	// var x = parseInt($('#harga_jenis_pakaian').val());
    	var x1 = $('#jenis_pakaian').val();
    	x1 = x1.split(",");
    	x1 = parseInt(x1[1]);

    	var x2 = $('#model').val();
    	x2 = x2.split(",");
    	x2 = parseInt(x2[1]);

    	var x3 = $('#bahan').val();
    	x3 = x3.split(",");
    	x3 = parseInt(x3[1]);

    	var x4 = $('#warna_bahan').val();
    	x4 = x4.split(",");
    	x4 = parseFloat(x4[1]);

    	var x5 = $('#sablon').val();
    	x5 = x5.split(",");
    	x5 = parseInt(x5[1]);

    	var x6 = $('#lokasi_sablon').val();
    	x6 = x6.split(",");
    	x6 = parseInt(x6[1]);

    	var x7 = $('#warna_sablon').val();
    	x7 = x7.split(",");
    	x7 = parseFloat(x7[1]);

    	var x8 = $('#lokasi_bordir').val();
    	x8 = x8.split(",");
    	x8 = parseInt(x8[1]);

    	var x9 = $('#jenis_ukuran').val();
    	x9 = x9.split(",");
    	x9 = parseInt(x9[1]);

    	var x10 = $('#lengan').val();
    	x10 = x10.split(",");
    	x10 = parseInt(x10[1]);

    	var x11 = $('#manset').val();
    	x11 = x11.split(",");
    	x11 = parseInt(x11[1]);

    	//bagian hitung jumlah

    	total = (total + x1 + x2 + x3  + x5  + x6 + x8 + x9 + x10 + x11) * x4 * x7 ;
        document.getElementById('estimasi').innerHTML = total;
    }
    $("#jenis_pakaian").change(function(){
    	compute();
    });

    $("#model").change(function(){
    	compute();
    });

    $("#bahan").change(function(){
    	compute();
    });

    $("#bahan").change(function(){
    	compute();
    });

    $("#warna_bahan").change(function(){
    	compute();
    });

    $("#sablon").change(function(){
    	compute();
    });

    $("#lokasi_sablon").change(function(){
    	compute();
    });

    $("#warna_sablon").change(function(){
    	compute();
    });

    $("#lokasi_bordir").change(function(){
    	compute();
    });

    $("#jenis_ukuran").change(function(){
    	compute();
    });

    $("#lengan").change(function(){
    	compute();
    });

    $("#manset").change(function(){
    	compute();
    });

    $("#jumlah").change(function(){
    	compute();
    });

  });
