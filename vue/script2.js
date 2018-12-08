var app = new Vue({
	el: "#app",
	data: {
		firstName: "David",
		lastName: "Bowey",
		count: 45
	},
	computed: {
		fullName: function() {
			return this.firstName + " " + this.lastName;
		}
	},
	mounted: function() {
		console.log("Mounted!");
	},	
	created: function() {
		console.log("Created!");
	},
	methods: {
		
	}
})