var myApp = angular
	.module("Portfolio", [])
	.controller("myController", function ($scope) {
		var banners = { 
			bannerAbout: "images/bannerAbout.jpg",
			bannerAboutTitle: "",
			
			bannerReferences: "images/bannerReferences.jpg",
			bannerReferencesTitle: "",
			
			bannerContact: "images/bannerContact.jpg",
			bannerContactTitle: "",
			
			bannerServicesCorporate: "images/bannerServicesCorporate.jpg",
			bannerServicesCorporateTitle: "",
			bannerServicesTax: "images/bannerServicesTax.jpg",
			bannerServicesTaxTitle: "",
			bannerServicesMergers: "images/bannerServicesBusiness.jpg",
			bannerServicesMergersTitle: "",
			bannerServicesRealstate: "images/bannerServicesRealstate.jpg",
			bannerServicesRealstateTitle: "",
			bannerServicesInvestment: "images/bannerServicesInvestment.jpg",
			bannerServicesInvestmentTitle: "",
			bannerServicesFiduciary: "images/bannerServicesFiduciary.jpg",
			bannerServicesFiduciaryTitle: "",
			bannerServicesNetworks: "images/bannerServicesNetworks.jpg",
			bannerServicesNetworksTitle: ""
		};
		$scope.banners = banners;
	}
);