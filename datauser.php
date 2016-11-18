
<table border="1">
    <div >
        <h3>Daftar pengguna User</h3>
    </div>
    <div>
    <button><a href="register.php">register</a></button>
    </div>
    </br>
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Password</th>
    </tr>
    <?php
    include 'config/koneksi.php';
    
    $data = mysqli_query($koneksi,"Select * from user");
    $no = 1;
    
    foreach ($data as $d )
    {
        echo "<tr>
                <td>$no</td>
                <td>".$d['username']."</td>
                <td>".$d['password']."</td>
        </tr>";
        
        $no++;
    }
    
    ?>
</table>

