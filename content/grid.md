<!-- ---
views:
    right:
        region: sidebar-right
        template: default/content
        data:
            meta:
                type: content
                route: block/grid-sidebar
... -->

Grid
===============================


<div class="col-main">
<h2>Main section</h2>
Del 1 Vertikalt grid
<ul>
    <li>Kopiera de grid-filer som finns i exemplet under example/grid/fluid/less/grid*. Lägg till dem så att de finns med i ditt tema. Lägg till båda i din modules.less, men kommentera bort den ena så att du bara har ett grid aktivt.
    </li>
    <br>

    <li>Skapa en fil modules/layout.less där du stylar din Anax Flat enligt ditt valda grid. Förslagsvis använder du mellan 960px till 1200px som största storlek och du använder 12 eller 24 kolumner, eller välj efter eget huvud. Detta är nu basen i ditt aktiva tema. Kommentera bort din tidigare modules/regions.less så den inte används från modules.less.
    </li>

    <br>
    <li>Skapa en modules/grid-helpers.less och lägg en mixin som visualiserar gridet. Mixinen skall heta .showGrid() och ta ett argument som är gridets maximala storlek. De bilder du behöver lägger du enklast i htdocs/img/grid.
    </li>

    <li>Skapa en ny sida content/grid.md. Lägg in den sidan i menyn. När man tittar på den sidan skall gridet visas i bakgrunden. Se till att sidan är fylld med innehåll. Sidan skall innehålla minst en sidebar (sidebar-left eller sidebar-right) med innehåll.
    </li><br>

    <li>Gör ditt tema responsivt med media queries och förberett för mindre skärmar.
    </li><br>

    <li>Lägg till så att ?vgrid fungerar på godtycklig sida likt https://dbwebb.se/?vgrid.
    </li><br>

    </ul>
</div>

<div class="col-sidebar">
<h2>Sidebar section</h2>
<ul>
    <li>I've worked through all this
    </li><br>
    <li>Finally my columns are passable
    </li><br>

    <li>The difficulty seems to be that I don't know the anax-flat way of building a page!
    </li><br>

    <li>It took hrs, but I finally found the right elements to assign columns too, so it fills the width.
    </li><br>
    <li>It feels like a lot of work compared to going on Illustrator and using that grid to make a layout.
    </li><br>
</ul>
</div>
