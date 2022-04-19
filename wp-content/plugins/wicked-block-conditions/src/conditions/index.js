const { __ } = wp.i18n;
const { date } = wp.date;

const Empty = () => {
    return false;
}

import PostHasTerm from './post-has-term';
import PostStatus from './post-status';
import CurrentDate from './current-date';
import UserHasRole from './user-has-role';
import UserFunction from './user-function';
import QueryString from './query-string';

const conditions = [];

conditions.push( {
    type:           'user_is_logged_in',
    label:          __( 'User Is Logged In' ),
    group:          __( 'User Conditions' ),
    description:    __( 'Returns true if a user is logged in.' ),
    bypassConfig:   true,
    edit:           Empty
} );

conditions.push( {
    type:           'user_is_not_logged_in',
    label:          __( 'User Is Not Logged In' ),
    group:          __( 'User Conditions' ),
    description:    __( 'Returns true if a user is not logged in.' ),
    bypassConfig:   true,
    edit:           Empty
} );

conditions.push( {
    type:           'user_has_role',
    label:          __( 'User Has Role' ),
    group:          __( 'User Conditions' ),
    description:    __( 'Returns true if the user is assigned to any of the selected roles.' ),
    edit:           UserHasRole
} );

conditions.push( {
    type:           'post_has_term',
    label:          __( 'Post Has a Term' ),
    group:          __( 'Post Conditions' ),
    description:    __( 'Returns true if the post has the selected term(s) assigned.' ),
    bypassConfig:   false,
    edit:           PostHasTerm
} );

conditions.push( {
    type:           'post_status',
    label:          __( 'Check Post Status' ),
    group:          __( 'Post Conditions' ),
    description:    __( 'Returns true if post status matches the selected option.' ),
    bypassConfig:   false,
    edit:           PostStatus,
    default:        {
        status: 'publish',
    }
} );

conditions.push( {
    type:           'current_date',
    label:          __( "Check The Date" ),
    group:          __( 'Date Conditions' ),
    description:    __( 'Returns true if the current date matches the specified conditions.' ),
    bypassConfig:   false,
    edit:           CurrentDate,
    default:        {
        compare:    'before',
        date:       date( 'Y-m-d H:i:00', new Date() )
    }
} );

conditions.push( {
    type:           'user_function',
    label:          __( 'Check a User-Defined Function' ),
    group:          __( 'Advanced' ),
    description:    __( 'Returns the result of a user-defined function.' ),
    bypassConfig:   false,
    edit:           UserFunction
} );

conditions.push( {
    type:           'query_string',
    label:          __( 'Check a Query String Value' ),
    group:          __( 'Advanced' ),
    description:    __( 'Returns true if the specified query string parameter is matched.' ),
    bypassConfig:   false,
    edit:           QueryString,
    default:        {
        parameter:  '',
        value:      ''
    }
} );

export { conditions };
