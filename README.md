#zonnepanelen
<h2>Hoe te gebruiken</h2>
<p>Download deze hele repository als een zip en verplaats het naar xampp htdocs folder.</p>
<p>CRUD staat voor Create Read Update Delete. Dat zijn acties met een database.</p>
<p>installeer CRUD in je htdocs file</p>
<p>
```php
include_once dirname(__FILE__)."/crud/crud.php";
$crud = new crud();
$crud->getDay();
$crud->getWeek();
$crud->getMonth();
$crud->getTotal();
$crud->getWeekJSON(tijd, maand, maand);
$crud->getMonthJSON(tijd, maand, maand);
$crud->getTotalJSON(tijd);
```
</p>
<ul>
  <li>&#9744;Frontpage dashboard</li>
  <li>&#9744;Detailed info dashboard</li>
  <li>&#9744;Achtergrond effecten</li>
  <li>&#9744;Zonneradar</li>
  <li>&#9745;Backend website</li>
  <li>&#9744;REST API</li>
</ul>



