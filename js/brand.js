
const addBrandBtn = document.getElementById('addBrandBtn');
const brandModal = document.getElementById('productModal');
const closeModalBtn = document.getElementById('closeModalBtn');
const brandForm = document.getElementById('brandForm');
const brandTableBody = document.querySelector('#brandTable tbody');

addBrandBtn.onclick = function() {
    brandModal.style.display = 'block';
}

closeModalBtn.onclick = function() {
    brandModal.style.display = 'none';
    document.getElementById('brandName').value = '';
}


