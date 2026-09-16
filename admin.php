<!DOCTYPE html>
<html>
<head>
<title>Pak Abu Stall</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="admin-page">
<header>
  <h1>Admin Page</h1>
</header>

<div class="navbar">
  <div class="page">
    <a href="admin.php"><i class="bi bi-house"></i></a>
    <a href="mng_drink.php"><i class="bi bi-cup-straw"></i>drink</a>
    <a href="mng_food.php"><i class="bi bi-fork-knife"></i>food</a>
  </div>
</div>

<main class="admin-content">
  <div class="admin-card">
    <div class="admin-title-row">
      <h2>Order List</h2>
      <span class="admin-badge">Today</span>
    </div>

    <div class="table-wrap">
      <table class="order-table">
        <thead>
          <tr>
            <th>No. Order</th>
            <th>Order Item</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>No Tel</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>#1001</td>
            <td>Nasi Ayam Hainan + Teh Ais</td>
            <td>2</td>
            <td>RM 32.00</td>
            <td>012-3456789</td>
            <td><span class="status-badge new">New Order</span></td>
          </tr>
          <tr>
            <td>#1002</td>
            <td>Ayam Goreng + Air Mineral</td>
            <td>3</td>
            <td>RM 45.00</td>
            <td>013-7788990</td>
            <td><span class="status-badge completed">Completed</span></td>
          </tr>
          <tr>
            <td>#1003</td>
            <td>Sate Bakar Set</td>
            <td>1</td>
            <td>RM 18.00</td>
            <td>011-2233445</td>
            <td><span class="status-badge new">New Order</span></td>
          </tr>
          <tr>
            <td>#1004</td>
            <td>Nasi Lemak + Kopi O</td>
            <td>4</td>
            <td>RM 58.00</td>
            <td>017-5566778</td>
            <td><span class="status-badge completed">Completed</span></td>
          </tr>
          <tr>
            <td>#1005</td>
            <td>Mi Goreng + Cendol</td>
            <td>2</td>
            <td>RM 40.00</td>
            <td>016-9988776</td>
            <td><span class="status-badge new">New Order</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</main>

<footer>
  <h2>&copy; NASI AYAM HAINAN PAK ABU</h2>
</footer>

</body>
</html>


