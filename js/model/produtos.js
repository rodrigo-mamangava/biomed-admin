function produtoController($scope) {
    $scope.produtos = [
                       {
                    	    "id": 1,
                    	    "nome": "Equipamento 01",
                    	    "tipo": "equipamento",
                    	    "resumo": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut elit luctus, luctus elit non, accumsan risus. Mauris in porttitor nunc, et suscipit neque. Sed sed mi gravida ligula pharetra egestas quis vel felis.",
                    	    "descricao": "Sed ante arcu, tempus quis efficitur quis, aliquam at lacus. Vivamus rhoncus ex magna, non dictum tortor volutpat a. Sed at cursus tellus. Nulla ultrices luctus orci quis feugiat. Suspendisse eu viverra nisi. Praesent pharetra non nisl a condimentum. In ultricies dictum dui ut tempus. Mauris scelerisque tortor mi, vel dignissim sem ultricies ac. Nunc consequat magna eu ornare fermentum. Nullam mi felis, blandit quis aliquet nec, fermentum quis mi. Pellentesque vitae fringilla lacus. Donec convallis orci at tristique posuere. Pellentesque vel eleifend nisi, nec vehicula neque. Nulla turpis diam, vestibulum sagittis consequat sed, finibus eu velit. Proin pharetra nunc ultricies dui porttitor pulvinar. Nam nec nibh condimentum est convallis posuere. Suspendisse potenti. Sed sed est at massa accumsan tempus. Curabitur volutpat, turpis et cursus iaculis, dui purus auctor ante, vitae aliquam velit dolor sit amet sem. Sed malesuada odio sit amet pretium luctus.",
                    	    "foto": "img/equip/item-01.jpg"
                    	  },
                    	  {
                    	    "id": 2,
                    	    "nome": "Equipamento 02",
                    	    "tipo": "equipamento",
                    	    "resumo": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut elit luctus, luctus elit non, accumsan risus. Mauris in porttitor nunc, et suscipit neque. Sed sed mi gravida ligula pharetra egestas quis vel felis.",
                    	    "descricao": "Sed ante arcu, tempus quis efficitur quis, aliquam at lacus. Vivamus rhoncus ex magna, non dictum tortor volutpat a. Sed at cursus tellus. Nulla ultrices luctus orci quis feugiat. Suspendisse eu viverra nisi. Praesent pharetra non nisl a condimentum. In ultricies dictum dui ut tempus. Mauris scelerisque tortor mi, vel dignissim sem ultricies ac. Nunc consequat magna eu ornare fermentum. Nullam mi felis, blandit quis aliquet nec, fermentum quis mi. Pellentesque vitae fringilla lacus. Donec convallis orci at tristique posuere. Pellentesque vel eleifend nisi, nec vehicula neque. Nulla turpis diam, vestibulum sagittis consequat sed, finibus eu velit. Proin pharetra nunc ultricies dui porttitor pulvinar. Nam nec nibh condimentum est convallis posuere. Suspendisse potenti. Sed sed est at massa accumsan tempus. Curabitur volutpat, turpis et cursus iaculis, dui purus auctor ante, vitae aliquam velit dolor sit amet sem. Sed malesuada odio sit amet pretium luctus.",
                    	    "foto": "img/equip/item-01.jpg"
                    	  },
                    	  {
                    	    "id": 3,
                    	    "nome": "Acessorio 01",
                    	    "tipo": "acessorio",
                    	    "resumo": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut elit luctus, luctus elit non, accumsan risus. Mauris in porttitor nunc, et suscipit neque. Sed sed mi gravida ligula pharetra egestas quis vel felis.",
                    	    "descricao": "Sed ante arcu, tempus quis efficitur quis, aliquam at lacus. Vivamus rhoncus ex magna, non dictum tortor volutpat a. Sed at cursus tellus. Nulla ultrices luctus orci quis feugiat. Suspendisse eu viverra nisi. Praesent pharetra non nisl a condimentum. In ultricies dictum dui ut tempus. Mauris scelerisque tortor mi, vel dignissim sem ultricies ac. Nunc consequat magna eu ornare fermentum. Nullam mi felis, blandit quis aliquet nec, fermentum quis mi. Pellentesque vitae fringilla lacus. Donec convallis orci at tristique posuere. Pellentesque vel eleifend nisi, nec vehicula neque. Nulla turpis diam, vestibulum sagittis consequat sed, finibus eu velit. Proin pharetra nunc ultricies dui porttitor pulvinar. Nam nec nibh condimentum est convallis posuere. Suspendisse potenti. Sed sed est at massa accumsan tempus. Curabitur volutpat, turpis et cursus iaculis, dui purus auctor ante, vitae aliquam velit dolor sit amet sem. Sed malesuada odio sit amet pretium luctus.",
                    	    "foto": "img/equip/item-02.jpg"
                    	  },
                    	  {
                    	    "id": 4,
                    	    "nome": "Acessorio 02",
                    	    "tipo": "acessorio",
                    	    "resumo": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut elit luctus, luctus elit non, accumsan risus. Mauris in porttitor nunc, et suscipit neque. Sed sed mi gravida ligula pharetra egestas quis vel felis.",
                    	    "descricao": "Sed ante arcu, tempus quis efficitur quis, aliquam at lacus. Vivamus rhoncus ex magna, non dictum tortor volutpat a. Sed at cursus tellus. Nulla ultrices luctus orci quis feugiat. Suspendisse eu viverra nisi. Praesent pharetra non nisl a condimentum. In ultricies dictum dui ut tempus. Mauris scelerisque tortor mi, vel dignissim sem ultricies ac. Nunc consequat magna eu ornare fermentum. Nullam mi felis, blandit quis aliquet nec, fermentum quis mi. Pellentesque vitae fringilla lacus. Donec convallis orci at tristique posuere. Pellentesque vel eleifend nisi, nec vehicula neque. Nulla turpis diam, vestibulum sagittis consequat sed, finibus eu velit. Proin pharetra nunc ultricies dui porttitor pulvinar. Nam nec nibh condimentum est convallis posuere. Suspendisse potenti. Sed sed est at massa accumsan tempus. Curabitur volutpat, turpis et cursus iaculis, dui purus auctor ante, vitae aliquam velit dolor sit amet sem. Sed malesuada odio sit amet pretium luctus.",
                    	    "foto": "img/equip/item-03.jpg"
                    	  },
                    	  {
                    	    "id": 5,
                    	    "nome": "Acessorio 03",
                    	    "tipo": "acessorio",
                    	    "resumo": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut elit luctus, luctus elit non, accumsan risus. Mauris in porttitor nunc, et suscipit neque. Sed sed mi gravida ligula pharetra egestas quis vel felis.",
                    	    "descricao": "Sed ante arcu, tempus quis efficitur quis, aliquam at lacus. Vivamus rhoncus ex magna, non dictum tortor volutpat a. Sed at cursus tellus. Nulla ultrices luctus orci quis feugiat. Suspendisse eu viverra nisi. Praesent pharetra non nisl a condimentum. In ultricies dictum dui ut tempus. Mauris scelerisque tortor mi, vel dignissim sem ultricies ac. Nunc consequat magna eu ornare fermentum. Nullam mi felis, blandit quis aliquet nec, fermentum quis mi. Pellentesque vitae fringilla lacus. Donec convallis orci at tristique posuere. Pellentesque vel eleifend nisi, nec vehicula neque. Nulla turpis diam, vestibulum sagittis consequat sed, finibus eu velit. Proin pharetra nunc ultricies dui porttitor pulvinar. Nam nec nibh condimentum est convallis posuere. Suspendisse potenti. Sed sed est at massa accumsan tempus. Curabitur volutpat, turpis et cursus iaculis, dui purus auctor ante, vitae aliquam velit dolor sit amet sem. Sed malesuada odio sit amet pretium luctus.",
                    	    "foto": "img/equip/item-04.jpg"
                    	  },
                    	  {
                    	    "id": 6,
                    	    "nome": "Acessorio 04",
                    	    "tipo": "acessorio",
                    	    "resumo": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut elit luctus, luctus elit non, accumsan risus. Mauris in porttitor nunc, et suscipit neque. Sed sed mi gravida ligula pharetra egestas quis vel felis.",
                    	    "descricao": "Sed ante arcu, tempus quis efficitur quis, aliquam at lacus. Vivamus rhoncus ex magna, non dictum tortor volutpat a. Sed at cursus tellus. Nulla ultrices luctus orci quis feugiat. Suspendisse eu viverra nisi. Praesent pharetra non nisl a condimentum. In ultricies dictum dui ut tempus. Mauris scelerisque tortor mi, vel dignissim sem ultricies ac. Nunc consequat magna eu ornare fermentum. Nullam mi felis, blandit quis aliquet nec, fermentum quis mi. Pellentesque vitae fringilla lacus. Donec convallis orci at tristique posuere. Pellentesque vel eleifend nisi, nec vehicula neque. Nulla turpis diam, vestibulum sagittis consequat sed, finibus eu velit. Proin pharetra nunc ultricies dui porttitor pulvinar. Nam nec nibh condimentum est convallis posuere. Suspendisse potenti. Sed sed est at massa accumsan tempus. Curabitur volutpat, turpis et cursus iaculis, dui purus auctor ante, vitae aliquam velit dolor sit amet sem. Sed malesuada odio sit amet pretium luctus.",
                    	    "foto": "img/equip/item-05.jpg"
                    	  }
                    	];
}