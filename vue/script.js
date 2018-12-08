var data = {
	message: "Hello World!",
	foo: "How are you?",
	age: 32,
	vote: 0,
	bar: true,
	students: [
		{ id: 1, name: "Aung Aung", address: "Hledan"},
		{ id: 2, name: "Bung Aung", address: "Dledan"},
		{ id: 3, name: "Cung Aung", address: "Eledan"},
	]
}
var appOne = new Vue({
	el: "#app1",
	data: data,
	methods: {
		upVote: function() {
			this.vote++;
		}
	}
})