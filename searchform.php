<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Buscar &hellip;', 'placeholder', 'wp-bootstrap-chicoxavier' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Buscar por:', 'label', 'wp-bootstrap-chicoxavier' ); ?>">
    </label>
    <input type="submit" class="search-submit btn btn-default" value="<?php echo esc_attr_x( 'Buscar', 'submit button', 'wp-bootstrap-chicoxavier' ); ?>">
</form>



