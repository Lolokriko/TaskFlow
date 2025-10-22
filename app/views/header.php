<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskFlow - Mis Tareas</title>

    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        header h1 {
            color: #1c1e21;
            margin: 0 0 20px 0;
        }
        .task-list {
            list-style: none;
            padding: 0;
        }
        .task-item {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            margin-bottom: 10px;
            border-radius: 6px;
            background-color: #fafafa;
            border-left: 5px solid #ccc;
            font-size: 16px;
            transition: all 0.2s ease;
        }
        .task-item.completed {
            text-decoration: line-through;
            color: #8a8d91;
            background-color: #f0f0f0;
        }
        .task-item.priority-alta {
            border-left-color: #e74c3c;
        }
        .task-item.priority-media {
            border-left-color: #f39c12;
        }
        .task-item.priority-baja {
            border-left-color: #3498db;
        }
    </style>
</head>
<body>

<div class="container">
    <header>
        <h1>TaskFlow</h1>
    </header>

    <main>

