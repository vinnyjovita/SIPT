<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </head>

    <style>

body{
        background-image: url("bg.jpeg");
      }

      .resume{
        text-align: center;
        font-size: 80px;
      }

      h1{
        text-align: center;
    }
    .container-resume{
        display: flex;
        justify-content: center;
        gap: 5rem;
    }

    .container-luar{
      height: 70vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    </style>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="/welcome">Vinny Jovita</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/about">About</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/resume">Resume</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/contact">Contact</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/krs">Lihat KRS</a>
                  </li>

                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
          <div class="container-luar">
            <div class="container">
        		<div class="main_title">
        			<h2>KRS Mahasiswa</h2>
        			<p>Kartu Rencana Studi</p>
        		</div>
            </div>

            <div class="container">
                <table width="40%">
                    <tr>
                    <td><h4>Nama</h4></td>
                    <?php
                        $nama = DB::table('mahasiswa')
                        ->where('id_mahasiswa', '1')
                        ->value('Nama');

                        echo "<td><h4>".$nama."</h4></td>";
                    ?>
                    </tr>

                    <tr>
                    <td><h4>Student ID</h4></td>
                    <?php
                        $studentID = DB::table('mahasiswa')
                        ->where('id_mahasiswa', '1')
                        ->value('StudentID');

                        echo "<td><h4>".$studentID."</h4></td>";
                    ?>
                    </tr>

                    <tr>
                    <td><h4>Term</h4></td>
                    <?php
                        $term = DB::table('mahasiswa')
                        ->where('id_mahasiswa', '1')
                        ->value('term');

                        echo "<td><h4>".$term."</h4></td>";
                    ?>
                    </tr>

                    <tr>
                    <td><h4>Total SKS</h4></td>    
                    <?php
                        $total=0;
                        $id=1;
                        while($id<7){                    
                            $temp = $total + DB::table('matakuliah')->where('id_matakuliah',$id)->value('sks');
                            $total = $temp;
                            $id++;
                        }
                        echo "<td><h4>".$total."</h4></td>";
                    ?>
                    </tr>                
            </div>

        </table>
        <br>
            <div class="container">

                <table width="700px">
                    <tr>
                        <th>No.</th>
                        <th>Kode Mata Kuliah</th>
                        <th>Nama Mata Kuliah</th>
                        <th style='text-align:center'>SKS</th>
                    </tr>
                    <?php
                        $no=1;
                        while ($no<7) {
                            
                            $kodematakuliah = DB::table('matakuliah')
                            ->where('id_matakuliah', $no)
                            ->value('kode_matakuliah');

                            $namamatakuliah = DB::table('matakuliah')
                            ->where('id_matakuliah', $no)
                            ->value('nama_matakuliah');

                            $sks = DB::table('matakuliah')
                            ->where('id_matakuliah', $no)
                            ->value('sks');

                            echo "<tr>";
                            echo "<td>".$no."</td>";                        
                            echo "<td>".$kodematakuliah."</td>";
                            echo "<td>".$namamatakuliah."</td>";
                            echo "<td style='text-align:center'>".$sks."</td>";
                            echo "</tr>";

                            $no++;
                        }
                    ?>
                  

                </table>
            </div>

          </div>

          
          
        </body>
</html>

