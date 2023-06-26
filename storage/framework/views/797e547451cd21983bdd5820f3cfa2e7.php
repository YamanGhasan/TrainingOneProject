<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        .container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Product List</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($product->id); ?></td>
                        <td><?php echo e($product->name); ?></td>
                        <td><?php echo e($product->price); ?></td>
                        <td><?php echo e($product->created_at); ?></td>
                        <td><?php echo e($product->updated_at); ?></td>
                        <td><a href="<?php echo e(route('products.edit', $product->id)); ?>">Edit</a></td>
                        <td>
                        <form action="<?php echo e(route('products.delete', $product->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <a href="<?php echo e(route('products.add')); ?>">Add Product</
<?php /**PATH C:\Users\user\cap-App\resources\views/productList.blade.php ENDPATH**/ ?>