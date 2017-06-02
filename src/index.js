
const render = ReactDOM.render;
const createStore = Redux.createStore;
const Provider = ReactRedux.Provider;
const store = createStore(todoApp);

render(
    <Provider store={store}>
        <App />
    </Provider>,
    document.getElementById('root')
);