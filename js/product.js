
const addProductBtn = document.getElementById('addProductBtn');
const productModal = document.getElementById('productModal');
const closeModalBtn = document.getElementById('closeModalBtn');
const brandForm = document.getElementById('brandForm');
const brandTableBody = document.querySelector('#brandTable tbody');

addProductBtn.onclick = function() {
    productModal.style.display = 'block';
}

closeModalBtn.onclick = function() {
    productModal.style.display = 'none';
    document.getElementById('productName').value = '';
}


