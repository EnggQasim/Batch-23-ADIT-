<div class="container">
 <div class="cell">1</div>
 <div class="cell">2</div>
 <div class="cell">3</div>
 <div class="cell">4</div>
</div>

.container
	display: flex;
	flex-direct:row,column, row-reverse, column-reverse;
	flex-wrap: wrap,nowrap, wrap-reverse
	flex-flow: row wrap;
	justify-content: center, flex-start, flex-end, space-between
	align-items: stretch, baseline

.cell
	flex-grow: 10 //10 columns
	order: 5 //set child cell order
	flex-shrink: 0