<?php
            // Include the database connection file
            include("../controllers/product_controller.php");
            // include("../controllers/customer_controller.php");
            $products = viewAllProducts_ctr();
            session_start();
            $user_id = $_SESSION['user_id'];
            $user_name = $_SESSION['user_name'];
            
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            /* height: 100%; */
        }
        header {
            background-color: #2ecc71;;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            color: #000;
            text-decoration: none;
            margin: 0 10px;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ffd700; 
        }
        .main-content {
            margin-left: 200px;
            padding: 20px;
        }


        .container {
            display: flex;
            height: 100%;
        }
        .search-bar {
            margin-bottom: 20px;
            text-align: center;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            grid-gap: 20px;
        }
        .product {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        .product img {
            max-width: 100%;
            height: auto;
        }
        .product h3 {
            margin: 10px 0;
        }
        .product button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }

        .sidebar {
            background-color: #f4f4f4;

            height: 100vh;
            width: 200px;
            position: fixed;
            padding-top: 20px;
        }
        .filter-heading {
            font-weight: bold;
            margin-bottom: 15px;
            font-size: 20px;
            color: #333;
        }
        .filter-label {
            font-weight: bold;
            margin-bottom: 5px;
            font-size: 16px;
            color: #666;
        }
        .category-dropdown,
        .brand-dropdown {
            display: none;
            margin-left: 20px;
        }
        .category-checkbox,
        .brand-checkbox {
            margin-bottom: 5px;
        }
        .filter-button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .filter-button:hover {
            background-color: #45a049;
        }

        .search-bar {
            display: flex;
            align-items: center;
            justify-content: center; 
            max-width: 500px; 
            margin: 0 auto; 
            margin-bottom: 20px;
        }

        .search-input {
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .search-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            margin-left: 10px;
            cursor: pointer;
        }

        .search-button:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
            color: inherit;
        } 



    </style>
</head>
<body>
    <header>
        <h1>Graded Lab</h1>
<span style="display: inline;"><h4 style="display: inline;">Welcome, <h2 style="display: inline;"><?php echo $user_name; ?></h2></h4></span>
        <nav>
            <a href="dashboard.php">Home</a> |
            <a href="dashboard.php">Products</a> |
            <a href="cart.php">Cart</a> |
            <a href="account.php">Account</a> |
            <a href="">Logout</a>
        </nav>
    </header>


    <div class="container">
        <div class="sidebar">
            <h2 class="filter-heading">Filter Products</h2>
            <div class="category-checkbox">
                <input type="checkbox" id="category" class="category-checkbox">
                <label for="category" class="filter-label">Category</label>
                <div class="category-dropdown">
                    <input type="checkbox" id="category1" class="category-checkbox">
                    <label for="category1">Category 1</label><br>
                    <input type="checkbox" id="category2" class="category-checkbox">
                    <label for="category2">Category 2</label><br>
                    <!-- Add more categories if needed -->
                </div>
            </div>
            <div class="brand-checkbox">
                <input type="checkbox" id="brand" class="brand-checkbox">
                <label for="brand" class="filter-label">Brand</label>
                <div class="brand-dropdown">
                    <input type="checkbox" id="brand1" class="brand-checkbox">
                    <label for="brand1">Brand 1</label><br>
                    <input type="checkbox" id="brand2" class="brand-checkbox">
                    <label for="brand2">Brand 2</label><br>
                <button onclick="applyFilters()" class="filter-button">Apply Filters</button>
            </div>
        </div>
    </div>
    </div>
    
    <div class= "main-content">
        <!-- Your main content here -->
        <div class="search-bar">
            <input type="text" placeholder="Search..." class="search-input">
            <button type="submit" class="search-button">Search</button>
        </div>
        <div class="product-grid">
            <?php foreach ($products as $product): ?>
                <!-- Product -->
                <a href="productDetails.php">
                <div class="product" data-title="<?php echo $product['product_title']; ?>">
                    <form action="../actions/addToCart.php" method="post">
                        <img src="<?php echo $product['product_image']; ?>" alt="<?php echo $product['product_title']; ?>" name="productImage">
                        <h3 name="productTitle"><?php echo $product['product_title']; ?></h3>
                        <p name="productPrice">$<?php echo $product['product_price']; ?></p>
                        <input type="hidden" name="productId" value="<?php echo $product['product_id']; ?>"></input>
                        <button type="submit">Add to Cart</button>
                    </form>
                </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>




    <script>
        // Toggle display of category dropdowns
        const categoryCheckbox = document.getElementById('category');
        const categoryDropdown = document.querySelector('.category-dropdown');
        categoryCheckbox.addEventListener('change', function() {
            categoryDropdown.style.display = this.checked ? 'block' : 'none';
        });

        // Toggle display of brand dropdowns
        const brandCheckbox = document.getElementById('brand');
        const brandDropdown = document.querySelector('.brand-dropdown');
        brandCheckbox.addEventListener('change', function() {
            brandDropdown.style.display = this.checked ? 'block' : 'none';
        });

        // Function to apply filters
        function applyFilters() {
            // Get selected categories
            const selectedCategories = [];
            const categoryCheckboxes = document.querySelectorAll('.category-checkbox:checked');
            categoryCheckboxes.forEach(function(checkbox) {
                selectedCategories.push(checkbox.id);
            });

            // Get selected brands
            const selectedBrands = [];
            const brandCheckboxes = document.querySelectorAll('.brand-checkbox:checked');
            brandCheckboxes.forEach(function(checkbox) {
                selectedBrands.push(checkbox.id);
            });

            // You can perform further actions like fetching products based on these filters
            // For demonstration, let's just log the values
            console.log("Selected Categories: " + selectedCategories.join(', '));
            console.log("Selected Brands: " + selectedBrands.join(', '));
        }




        // Function to handle search
        document.querySelector('.search-button').addEventListener('click', function() {
            const searchInput = document.querySelector('.search-input').value.toLowerCase();
            const products = document.querySelectorAll('.product');

            products.forEach(function(product) {
                const title = product.getAttribute('data-title').toLowerCase();
                if (title.includes(searchInput)) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        });


    </script>
</body>
</html>

