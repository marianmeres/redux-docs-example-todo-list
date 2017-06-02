<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Redux Todo Docs Example</title>
    <script src="https://unpkg.com/react@latest/dist/react.js"></script>
    <script src="https://unpkg.com/react-dom@latest/dist/react-dom.js"></script>
    <script src="https://unpkg.com/redux@latest/dist/redux.min.js"></script>
    <script src="https://unpkg.com/react-redux@latest/dist/react-redux.min.js"></script>
    <script src="https://unpkg.com/prop-types@latest/prop-types.min.js"></script>
    <script src="https://unpkg.com/babel-standalone@latest/babel.min.js"></script>
</head>
<body>
    <div id="root">please wait...</div>

    <script type='text/babel'>

        let connect = ReactRedux.connect;

<?php
    // actions
    echo file_get_contents('./src/actions/index.js');

    // reducers
    echo file_get_contents('./src/reducers/todos.js');
    echo file_get_contents('./src/reducers/visibilityFilter.js');
    echo file_get_contents('./src/reducers/index.js');

    // presentational
    echo file_get_contents('./src/components/Todo.js');
    echo file_get_contents('./src/components/TodoList.js');
    echo file_get_contents('./src/components/Link.js');
    echo file_get_contents('./src/components/Footer.js');
    echo file_get_contents('./src/components/App.js');

    // containers
    echo file_get_contents('./src/containers/VisibleTodoList.js');
    echo file_get_contents('./src/containers/FilterLink.js');
    echo file_get_contents('./src/containers/AddTodo.js'); // marked as "other"

    // main entry
    echo file_get_contents('./src/index.js');
?>
    </script>
</body>
</html>
