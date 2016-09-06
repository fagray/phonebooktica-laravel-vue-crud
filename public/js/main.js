Vue.component('contacts',{

	props  : ['list'],

	template : "#contacts-template",

	data : function() {

		return {

			contacts  : [],
			edit  : false,

			newContact : {
				id : '',
				name  : '',
				number : ''
			}
		};

	},

	created(){

		this.fetchContactList();
	},

	methods : {

		fetchContactList : function(){

			this.$http.get('/api/contacts').then((data) => {
				this.$set('list', data.json())
			});
		}﻿,

		showContact : function(contactId){

			this.edit = true

			this.$http.get('/api/contacts/'+contactId).then((contact) => {

				// parse the json body and convert it to object
				var contact = contact.json();
				console.log(contact);
				this.newContact.id  = contact.id,
				this.newContact.name  = contact.name,
				this.newContact.number = contact.number
				

			});
		},

		// update contact
		updateContact : function(contactId){
			
			var contact = this.newContact;

			this.$http.patch('api/contacts/'+contactId,contact).then((response) => {
				this.fetchContactList();
				this.clearInputs();
				console.log('Contact has been updated successfully!');
			});

		},

		addNewContact : function(){

			var contact = this.newContact;

			// clear the contact form
			this.clearInputs();

			// send a post request 
			this.$http.post('/api/contacts', contact).then((response) => {
				console.log('Contact has been saved.');
				//refresh the list 
				this.fetchContactList();

			});


		},

		// remove contact
		deleteContact : function(contactId){

			this.$http.delete('/api/contacts/'+contactId).then((response) => {
				console.log('Contact has been deleted!');
				this.fetchContactList();
			});
		},

		//clear field inputs
		clearInputs : function(){

			this.newContact  =  { name : '', number : ''}
		}

	}

})

new Vue({

	el : "body"

})