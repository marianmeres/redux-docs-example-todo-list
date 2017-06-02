
const FilterLink = connect(
    //mapStateToProps,
    (state, ownProps) => {
        return {
            active: ownProps.filter === state.visibilityFilter
        }
    },
    // mapDispatchToProps,
    (dispatch, ownProps) => {
        return {
            onClick: () => {
                dispatch(setVisibilityFilter(ownProps.filter))
            }
        }
    }
)(Link);
