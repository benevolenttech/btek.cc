<?php

function paginationSection()
{
?>
  <section class="diagonal alternate">
    <!-- Pagination links -->
    <div class="pagination">
      {% if paginator.previous_page %}
      <a href="{{ paginator.previous_page_path }}" class="previous btn">&larr; Newer posts</a>
      {% endif %}

      <span class="page_number ">{{ paginator.page }} of {{ paginator.total_pages }}</span>

      {% if paginator.next_page %}
      <a href="{{ paginator.next_page_path }}" class="next btn">Older posts &rarr;</a>
      {% endif %}
    </div>
  </section>
<?php
}
