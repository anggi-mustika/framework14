<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
    <title>Curriculum Vitae</title>
</head>

<body>

    <header style="text-align: center;">
        <div class="p-4 mb-6 bg-success text-white">
        <img src="/assets/bootstrap-5.0.2-dist/image/Foto_20753044.jpg" width="150" height="160" style="border-radius: 50%;"/>
        <h1><?php echo $identitas['nama']?></h1>
        <p>(Web Developer)</p>
        </div>
    </header>

    <div class="bg-success p-2" style="--bs-bg-opacity: .5;">
    <article style="text-align: center;">
        <h2>Curriculum Vitae</h2>
        <p>
            Hi, saya Anggi Mustika Sari saya adalah web developer. Saat ini sedang belajar PHP Codeigniter di Politeknik Negeri Lampung.
            
        </p>
    </article>

    <div style="max-width: 600px; margin: 3em auto">
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Data Diri</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nama  : <?php echo $identitas['nama']?></td>
                </tr>
                 <tr>
                    <td>Alamat: <?php echo $identitas['ttl']?></td>
                </tr>
                 <tr>
                    <td>TTL   : <?php echo $identitas['alamat']?></td>
                </tr>
                 <tr>
                    <td>Hobi  : <?php echo $identitas['hobi']?></td>
                </tr>
                <tr>
                
                <td><a href="<?php echo site_url('portofolio/ubah');?>" 
                class="btn btn-sm btn-info">Update</a>
                    <a href="<?php echo site_url('portofolio/hapus/');?>" 
                class="btn btn-sm btn-danger">Delete</a>
                </td>
 <td>
 </tr>

            </tbody>
        </table>
    </div>

    <div style="max-width: 600px; margin: 3em auto">
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Skill</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <ul>
                            <li>HTML (Expert)</li>
                            <li>CSS (Beginner)</li>
                            <li>PHP Codelgniter</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>

    <div class="bg-success p-2 text-white bg-opacity-75">
    <footer style="text-align: center;">
        <p>Copyright &copy; Anggi Mustika Sari.</p>
    </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
</body>
</html>