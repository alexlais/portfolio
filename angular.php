<?php require("head.php"); ?> 
	<div class="header">
        <h1>Alex Lais</h1>
        <h2>Front-End Developer</h2> 
        <ul class="item00">
          	<li><a href="index.php"><img alt="previous" src="images/previous.gif" /></a></li> 
<?php require("nav.php"); ?>
            <li><a href="01.php"><img alt="next" src="images/next.gif"></a></li>
        </ul>
    </div>
    
    <script>
     // var myApp = angular.module("myModule", []);
     
     // var myController = function ($scope) {
     // 	$scope.message = "test";
     	
     // 	var employee = {
     // 		firstName: "David",
     // 		lastName: "Hass"
     // 	};
     // 	$scope.employee = employee;
     // };
     
     // job of controller is to build a module for the view to display
     // myApp.controller("myController", myController);
     
     
     
     var myApp = angular
     	.module("myModule", [])
     	.controller("myController", function ($scope) {
     		//5, 6
     		$scope.message = "2-way data binding";
     	
     		//7
	     	var employee = { 
	     		firstName: "David",
	     		lastName: "Hass", 
	     		position: 1, 
	     		image: "http://cdn.arstechnica.net/wp-content/uploads/2016/02/5718897981_10faa45ac3_b-640x624.jpg" 
	     	};
	     	$scope.employee = employee;
     	
     		//8
	     	var employees = [
	     		{ firstName: "David", lastName: "Hass", position: 1, image: "http://kennyki.github.io/angular-thumbnail/img/pic_angular.jpg" },
	     		{ firstName: "Mary", lastName: "Avocado", position: 2, image: "http://kennyki.github.io/angular-thumbnail/img/pic_angular.jpg" }
	     	];
	     	$scope.employees = employees;
     	
     		//09
	     	var countries = [
	     		{ countryName: "USA", cities: [
	     			{ cityName: "New York", position: 1 },
	     			{ cityName: "Los Angeles", position: 2 },
	     			{ cityName: "Miami", position: 3 }
	     		]},
	     		{ countryName: "Mexico", cities: [
	     			{ cityName: "Mexico City", position: 4 },
	     			{ cityName: "Guadalajara", position: 5 }
	     		]}
	     	];
	     	$scope.countries = countries;
	     	
	     	//10
	     	var pool = [
	     		{ name: "David", likes: 0, dislikes: 0 },
	     		{ name: "Mary", likes: 0, dislikes: 0 }
	     	];
	     	$scope.pool = pool;
	     	
	     	$scope.likesFunction = function (pool) {
	     		pool.likes++;
	     	}
	     	
	     	$scope.dislikesFunction = function (pool) {
	     		pool.dislikes++;
	     	}
	     	
	     	//11
	     	
	     });
     
     
    </script>
    
    
    
    <div class="body" ng-app="myModule">
    	<div class="page" ng-controller="myController">
   			<h2>01</h2>
			<p>10 + 20 = {{ 10 + 20 }}</p>

			<h2>02</h2>
			<p>{{ 10 == 20 }}</p>

			<h2>03</h2>
			<p>{{ {name: 'David', age: '33'}.name }}</p>

			<h2>04</h2>
			<p>{{ ['David', 'Pam', 'Sara'][2] }}</p>

			<h2>05</h2>
			<p>{{ message }}</p>

			<h2>06: two way data-binding</h2>
				<input type="text" ng-model="message" />
			
			    <select ng-model="message">
			      <option value="option-1">Option 1</option>
			      <option value="option-2">Option 2</option>
				</select> 

			     <textarea ng-model="message" rows="4" cols="50"></textarea> 

			<h2>07</h2>
			<p>first name: {{ employee.firstName }}</p>
			<p>last name: {{ employee.lastName }}</p>
			<p>{{ employee.firstName + ' ' + employee.lastName + ' eyes' }} <img ng-src="{{ employee.image }}" alt="{{ employee.firstName + ' ' + employee.lastName + ' eyes' }}" width="200px" height="200px"/></p>

			<h2>08: ng-repeat Directive</h2>
			<ul ng-repeat="each in employees">
				<li>{{ each.firstName }}</li>
				<li>{{ each.lastName }}</li>
				<li>{{ each.position }}</li>
				<li><img ng-src="{{ each.image }}" width="200px" height="200px"/></li>
			</ul>

			<h2>09: ng-repeat Directive nestling</h2>
    		<ul ng-repeat="each in countries">
				<li>{{ each.countryName }} Index {{ $index }}
					<ul ng-repeat="each in each.cities">
						<li>{{ each.cityName }} Country Index: {{ $parent.$index }} Index {{ $index }}</li>
					</ul>
				</li>
			</ul>
			 
    		<ul ng-repeat="eachCountry in countries">
				<li>{{ eachCountry.countryName }} Index {{ $index }}
					<ul ng-repeat="eachCity in eachCountry.cities">
						<li>{{ eachCity.cityName }} Country Index: {{ $parent.$index }} Index {{ $index }}</li>
					</ul>
				</li>
			</ul>

			<h2>10: Handeling Events</h2>
    		<ul ng-repeat="each in pool">
				<li>{{ each.name }} 
					<ul>
						<li>Howv many likes: {{ each.likes }} </li>
						<li>How many dislikes: {{ each.dislikes }} </li>
						<li>
							<input type="button" value="Like" ng-click="likesFunction(each)"/>
							<input type="button" value="Dislike" ng-click="dislikesFunction(each)"/>
						</li>
					</ul>
				</li>
			</ul>

			<h2>11: Filters</h2>
    		<ul ng-repeat="each in pool">
				<li>{{ each.name }} 
					<ul>
						<li>Howv many likes: {{ each.likes }} </li>
						<li>How many dislikes: {{ each.dislikes }} </li>
						<li>
							<input type="button" value="Like" ng-click="likesFunction(each)"/>
							<input type="button" value="Dislike" ng-click="dislikesFunction(each)"/>
						</li>
					</ul>
				</li>
			</ul>
    	</div>
    	<div class="rail">
    		<p><b>ANGULAR</b></p>
    	</div>
	</div>
	<p class="w3c"><a href="https://web.archive.org/web/20140420131332/http://validator.w3.org/check?uri=referer"><img src="Alex%20Lais%20-%20Portfolio_files/valid-xhtml10-blue.png" alt="Valid XHTML 1.0 Strict" height="31" width="88"></a> <a href="https://web.archive.org/web/20140420131332/http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px" src="Alex%20Lais%20-%20Portfolio_files/vcss-blue.gif" alt="Valid CSS!"></a></p>
</body>
</html>
