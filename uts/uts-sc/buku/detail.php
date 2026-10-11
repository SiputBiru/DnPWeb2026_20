<?php

$page_title = "Detail Buku";

include __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/koneksi.php';

$id = $_GET['id'] ?? null;
if (!$id) {
  header('Location: list.php');
  exit;
}

// prepared statement
$stmt = $pdo->prepare("SELECT * FROM buku WHERE id = :id");
$stmt->execute(['id' => $id]);
$buku = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$buku) {
  header('Location: list.php');
  exit;
}

?>
        <section>
            <h2>Detail Buku</h2>
            
            <table> 
              <tbody> 
              <tr><th>Judul</th><td><?php echo $buku['judul']; ?></td></tr>
              <tr><th>Pengarang</th><td><?php echo $buku['pengarang']; ?></td></tr>
              <tr><th>Tahun Terbit</th><td><?php echo $buku['tahun']; ?></td></tr>
              <tr><th>ISBN</th><td><?php echo $buku['isbn'] !== '' ? $buku['isbn'] : '-'; ?></td></tr>
              <tr><th>Kategori</th><td><?php echo $buku['kategori'] !== '' ? $buku['kategori'] : '-'; ?></td></tr>
              </tbody>
            </table>

            <p>
            <a href="edit.php?id=<?php echo $buku['id']; ?>" class="btn-edit">Edit</a>
            <a href="list.php">Kembali ke Daftar Buku</a>
            </p>
        </section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
