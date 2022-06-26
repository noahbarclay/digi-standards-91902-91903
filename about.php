<?php include("header.php");?>

<style>
/*  SECTIONS  */
.section {
	clear: both;
	padding: 30px;
	margin: 0px;
}

/*  COLUMN SETUP  */
.col {
	display: block;
	float:left;
	margin: 1% 0 1% 30%;
}
.col:first-child { margin-left: 0; }

/*  GROUPING  */
.group:before,
.group:after { content:""; display:table; }
.group:after { clear:both;}
.group { zoom:1; /* For IE 6/7 */ }

/*  GRID OF TWO  */
.span_2_of_2 {
	width: 10%;
}
.span_1_of_2 {
	width: 10%;
}

/*  GO FULL WIDTH AT LESS THAN 600 PIXELS */

@media only screen and (max-width: 600px) {
	.col { 
		margin: 1% 0 1% 0%;
	}
}

@media only screen and (max-width: 600px) {
	.span_2_of_2, .span_1_of_2 { width: 100%; }
}

</style>

<t>About</t>

<div class="section group">
	<div class="col span_1_of_2">
	This is column 1
	</div>
	<div class="col span_1_of_2">
	This is column 2
	</div>
</div>''





<?php include("footer.php");?>