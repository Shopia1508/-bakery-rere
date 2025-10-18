@extends('layout')

@section('content')
<div class="products">
  <div class="products-text">
    <h2>Our Product</h2>
    <div class="btn-products">
        <button onclick="filterCategory('Birthday cake')" class="btn">Birthday cake</button>
        <button onclick="filterCategory('Brownies')" class="btn">Brownies</button>
        <button onclick="filterCategory('Bento cake')" class="btn">Bento cake</button>
        <button onclick="filterCategory('Dessert box')" class="btn">Dessert box</button>
        <button onclick="filterCategory('Bolu')" class="btn">Bolu</button>
        <button onclick="filterCategory('Dry cake')" class="btn">Dry cake</button>
    </div>
  </div>

  <!-- Tempat tampil produk -->
  <div id="product-list" class="product-list" style="display:grid; grid-template-columns: repeat(auto-fit,minmax(200px,1fr)); gap:20px; margin-top:20px;"></div>
</div>

<!-- Script ambil data dari API -->
<script>
document.addEventListener('DOMContentLoaded', loadAllProducts);

function loadAllProducts() {
  fetch('/api/products')
    .then(res => res.json())
    .then(showProducts)
    .catch(err => console.error('Error:', err));
}

function filterCategory(category) {
  fetch(`/api/products/category/${encodeURIComponent(category)}`)
    .then(res => res.json())
    .then(showProducts)
    .catch(err => console.error('Error:', err));
}

function showProducts(data) {
  const container = document.getElementById('product-list');
  container.innerHTML = '';

  if (!data || data.length === 0) {
    container.innerHTML = '<p class="text-align:center;">Tidak ada produk di kategori ini.</p>';
    return;
  }


  data.forEach(product => {
    container.innerHTML += `
      <div class="products-card fade-in">
        <img src="/storage/${product.image}" alt="${product.name}">
        <h4>${product.name}</h4>
        <p>${product.description}</p>
        <div class="price-add">
          <span><strong>Rp ${product.price}</strong></span>
          <button>+</button>
        </div>
      </div>
    `;
  });
}
</script>
@endsection
