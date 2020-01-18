<html>
    <head>
        <title>
        No 1
        </title>
    </head>
    <body> 
    <?php
    $saldoAwal=3000000;
    $bunga=0.025;
    $bulan=12;
    $saldoAkhir=$saldoAwal+($saldoAwal*$bunga*$bulan);
    echo "Saldo akhir setelah ".$bulan." bulan adalah:Rp.".$saldoAkhir.",-";
    ?>
    </body>
</html>