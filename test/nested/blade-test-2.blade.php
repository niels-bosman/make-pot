<p>
    {{ __('text 1', 'domain') }}
</p>
<p>
    @php _e('text 2', 'domain') @endphp
</p>
<p>
    {{ _n('single 1', 'plural 1', 1, 'domain') }}
</p>
<p>
    {{ _x('text 3', 'context', 'domain') }}
</p>
<p>
    @php _ex('text 4', 'context', 'domain') @endphp
</p>
<p>
    {{ _nx('single 2', 'plural 2', 1, 'context', 'domain') }}
</p>
<p>
    {{ esc_attr__('text 5', 'domain') }}
</p>
<p>
    @php esc_attr_e('text 6', 'domain') @endphp
</p>
<p>
    {{ esc_attr_x('text 7', 'context', 'domain') }}
</p>
<p>
    {{ esc_html__('text 8', 'domain') }}
</p>
<p>
    @php esc_html_e('text 9', 'domain') @endphp
</p>
<p>
    {{ esc_html_x('text 10', 'context', 'domain') }}
</p>
<p>
    @php _n_noop('singular 3', 'plural 3', 'domain') @endphp
</p>
<p>
    @php _nx_noop('singular 4', 'plural 4', 'context', 'domain') @endphp
</p>

<p>
    {{ __('text 1',
    'domain') }}
</p>
<p>
    @php _e('text 2',
    'domain') @endphp
</p>
<p>
    {{ _n('single 1',
    'plural 1', 1, 'domain') }}
</p>
<p>
    {{ _x('text 3',
    'context', 'domain') }}
</p>
<p>
    @php _ex('text 4',
    'context', 'domain') @endphp
</p>
<p>
    {{ _nx('single 2',
    'plural 2', 1, 'context', 'domain') }}
</p>
<p>
    {{ esc_attr__('text 5',
    'domain') }}
</p>
<p>
    @php esc_attr_e('text 6',
    'domain') @endphp
</p>
<p>
    {{ esc_attr_x('text 7',
    'context', 'domain') }}
</p>
<p>
    {{ esc_html__('text 8',
    'domain') }}
</p>
<p>
    @php esc_html_e('text 9',
    'domain') @endphp
</p>
<p>
    {{ esc_html_x('text 10',
    'context', 'domain') }}
</p>
<p>
    @php _n_noop('singular 3',
    'plural 3', 'domain') @endphp
</p>
<p>
    @php _nx_noop('singular 4',
    'plural 4', 'context', 'domain') @endphp
</p>

