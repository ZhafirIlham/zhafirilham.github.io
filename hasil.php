<!DOCTYPE html>
<html>
<head>
	<title>Hasil Prediksi Penilaian Driver Ojek Online</title>
</head>
<body bgcolor="#B4E55C">
	<?php
	$keramahandriver = $_POST['keramahandriver'];
	$caramengemudi = $_POST['caramengemudi'];
	$lamapenjemputan = $_POST['lamapenjemputan'];
	$kelayakanarmada = $_POST['kelayakanarmada'];
	$pemilihanrute = $_POST['pemilihanrute'];

	$poin = 0;


	if ($keramahandriver == "Sangat Ramah") {
		if ($caramengemudi == "Sangat Nyaman") {
			if ($lamapenjemputan == "Cepat") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 5;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.9;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.8;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.7;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.6;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.5;
					}
				}
			}
			elseif ($lamapenjemputan == "Rata-rata") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.8;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.7;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.6;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.5;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.4;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.3;
					}
				}
			}
			elseif ($lamapenjemputan == "Lama") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.6;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.5;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.4;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.3;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.2;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.1;
					}
				}
			}
		}
		elseif ($caramengemudi == "Nyaman") {
			if ($lamapenjemputan == "Cepat") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.8;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.7;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.6;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.5;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.4;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.3;
					}
				}
			}
			elseif ($lamapenjemputan == "Rata-rata") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.6;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.5;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.4;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.3;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.2;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.1;
					}
				}
			}
			elseif ($lamapenjemputan == "Lama") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.4;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.3;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.2;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.1;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.9;
					}
				}
			}
		}
		elseif ($caramengemudi == "Tidak Nyaman") {
			if ($lamapenjemputan == "Cepat") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.2;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.1;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.9;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.8;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.7;
					}
				}
			}
			elseif ($lamapenjemputan == "Rata-rata") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.9;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.8;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.7;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.6;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.5;
					}
				}
			}
			elseif ($lamapenjemputan == "Lama") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.8;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.7;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.6;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.5;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.4;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.3;
					}
				}
			}
		}
	}
	if ($keramahandriver == "Ramah") {
		if ($caramengemudi == "Sangat Nyaman") {
			if ($lamapenjemputan == "Cepat") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.7;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.6;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.5;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.4;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.3;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.2;
					}
				}
			}
			elseif ($lamapenjemputan == "Rata-rata") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.5;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.4;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.3;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.3;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.1;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4;
					}
				}
			}
			elseif ($lamapenjemputan == "Lama") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.3;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.2;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.1;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.9;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.8;
					}
				}
			}
		}
		elseif ($caramengemudi == "Nyaman") {
			if ($lamapenjemputan == "Cepat") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.5;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.4;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.3;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.2;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.1;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4;
					}
				}
			}
			elseif ($lamapenjemputan == "Rata-rata") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.3;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 4.2;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4.1;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.7;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.6;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.5;
					}
				}
			}
			elseif ($lamapenjemputan == "Lama") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.8;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.7;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.6;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.5;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.4;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.3;
					}
				}
			}
		}
		elseif ($caramengemudi == "Tidak Nyaman") {
			if ($lamapenjemputan == "Cepat") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.9;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.8;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.7;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.6;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.5;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.4;
					}
				}
			}
			elseif ($lamapenjemputan == "Rata-rata") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.7;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.6;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.5;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.4;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.3;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.2;
					}
				}
			}
			elseif ($lamapenjemputan == "Lama") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.5;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.4;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.3;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.2;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.1;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3;
					}
				}
			}
		}
	}
	if ($keramahandriver == "Tidak Ramah") {
		if ($caramengemudi == "Sangat Nyaman") {
			if ($lamapenjemputan == "Cepat") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 4;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.9;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.8;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.7;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.6;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.5;
					}
				}
			}
			elseif ($lamapenjemputan == "Rata-rata") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.8;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.7;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.6;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.5;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.4;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.3;
					}
				}
			}
			elseif ($lamapenjemputan == "Lama") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.6;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.5;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.5;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.4;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.3;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.2;
					}
				}
			}
		}
		elseif ($caramengemudi == "Nyaman") {
			if ($lamapenjemputan == "Cepat") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.4;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.3;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.2;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.1;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 2.9;
					}
				}
			}
			elseif ($lamapenjemputan == "Rata-rata") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3.2;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 3.1;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 2.9;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 2.8;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 2.7;
					}
				}
			}
			elseif ($lamapenjemputan == "Lama") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 3;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 2.9;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 2.8;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 2.7;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 2.6;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 2.5;
					}
				}
			}
		}
		elseif ($caramengemudi == "Tidak Nyaman") {
			if ($lamapenjemputan == "Cepat") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 2.8;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 2.7;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 2.6;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 2.5;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 2.4;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 2.3;
					}
				}
			}
			elseif ($lamapenjemputan == "Rata-rata") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 2.6;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 2.5;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 2.4;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 2.3;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 2.2;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 2.1;
					}
				}
			}
			elseif ($lamapenjemputan == "Lama") {
				if ($kelayakanarmada == "Sangat Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 2.4;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 2.3;
					}
				}
				elseif ($kelayakanarmada == "Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 2.2;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 2.1;
					}
				}
				elseif ($kelayakanarmada == "Kurang Layak") {
					if ($pemilihanrute == "Sesuai") {
						$poin = 2;
					}
					elseif ($pemilihanrute == "Tidak Sesuai") {
						$poin = 1;
					}
				}
			}
		}
	}

	?>
	<center>
		<h1>Prediksi Penilaian Driver Ojek Online</h1>
	</center>
	<hr>
	<div align="right">
		<a href="index.php">
			<button>Kembali</button>
		</a>
	</div>
	<center>
		<h2>Hasil Prediksi: <?php echo $poin ;?> Poin</h2>
	</center>
</body>
</html>