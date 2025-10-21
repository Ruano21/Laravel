<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <style>
        * { box-sizing: border-box; }
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background-color: #f2f4f7;
            margin: 0;
            color: #333;
        }
        header {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 20px 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        main {
            max-width: 1000px;
            margin: 30px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        footer {
            text-align: center;
            padding: 15px;
            background: #e9ecef;
            color: #555;
            margin-top: 40px;
            font-size: 14px;
        }
        h1, h2 {
            margin-bottom: 15px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        }
        .price {
            color: #28a745;
            font-weight: bold;
            font-size: 1.1em;
        }
        .btn {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            margin-top: 10px;
            font-size: 0.9em;
        }
        .btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Catálogo de Productos (ARM)</h1>
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
        Proyecto Laravel AE_ARM — <?php echo e(date('Y')); ?>

    </footer>
</body>
</html>

<?php /**PATH C:\Users\CampusFP\AE_ARM\resources\views/layouts/base.blade.php ENDPATH**/ ?>