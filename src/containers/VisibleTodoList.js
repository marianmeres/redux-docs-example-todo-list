
const getVisibleTodos = (todos, filter) => {
    switch (filter) {
        case 'SHOW_ALL':
            return todos
        case 'SHOW_COMPLETED':
            return todos.filter(t => t.completed)
        case 'SHOW_ACTIVE':
            return todos.filter(t => !t.completed)
    }
};

const VisibleTodoList = connect(
    // mapStateToProps,
    (state) => {
        return {
            todos: getVisibleTodos(state.todos, state.visibilityFilter)
        }
    },
    // mapDispatchToProps
    (dispatch) => {
        return {
            onTodoClick: (id) => {
                dispatch(toggleTodo(id))
            }
        }
    }
)(TodoList);