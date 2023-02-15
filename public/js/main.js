$('#kt_docs_repeater_basic').repeater({
    initEmpty: false,

    defaultValues: {
        'text-input': 'foo'
    },

    show: function () {
        $(this).slideDown();
    },

    hide: function (deleteElement) {
        $(this).slideUp(deleteElement);
    }
});


// Format options
var optionFormat = function(item) {
    if ( !item.id ) {
        return item.text;
    }

    var span = document.createElement('span');
    var imgUrl = item.element.getAttribute('data-kt-select2-country');
    var template = '';

    template += '<img src="' + imgUrl + '" class="rounded-circle h-20px me-2" alt="image"/>';
    template += item.text;

    span.innerHTML = template;

    return $(span);
}

// Init Select2 --- more info: https://select2.org/
$('#kt_docs_select2_country').select2({
    templateSelection: optionFormat,
    templateResult: optionFormat
});



// The DOM elements you wish to replace with Tagify
var input1 = document.querySelector("#kt_tagify_1");

// Initialize Tagify components on the above inputs
new Tagify(input1);


// The DOM elements you wish to replace with Tagify
var input = document.querySelector("#kt_tagify_6");

// Initialize Tagify script on the above inputs
new Tagify(input, {
    whitelist: ["Vehicle pick-up", "Crane pick-up", "Fast attention", "Accepts Credit Cards", "Private Parking", "Parking Street", "Pick up by the insurer", "Quick repair", "Wireless Internet", "Rest area"],
    maxTags: 10,
    dropdown: {
        maxItems: 20,           // <- mixumum allowed rendered suggestions
        classname: "tagify__inline__suggestions", // <- custom classname for this dropdown, so it could be targeted
        enabled: 0,             // <- show suggestions on focus
        closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
    }
});

new Tagify(input, {
    whitelist: ["Vehicle pick-up", "Crane pick-up", "Fast attention", "Accepts Credit Cards", "Private Parking", "Parking Street", "Pick up by the insurer", "Quick repair", "Wireless Internet", "Rest area"],
    maxTags: 10,
    dropdown: {
        maxItems: 20,           // <- mixumum allowed rendered suggestions
        classname: "", // <- custom classname for this dropdown, so it could be targeted
        enabled: 0,             // <- show suggestions on focus
        closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
    }
});


var inputElm = document.querySelector('#kt_tagify_users');

const usersList = [
    { value: 1, name: 'Allianz', avatar: 'allianz-l.svg', email: 'e.smith@kpmg.com.au' },
    { value: 2, name: 'Axa', avatar: 'axa-l.svg', email: 'max@kt.com' },
    { value: 3, name: 'Balumba Seguros', avatar: 'balumba-l.svg', email: 'sean@dellito.com' },
    { value: 4, name: 'Catalana Occidente', avatar: 'catalana-occidente-l.svg', email: 'brian@exchange.com' },
    { value: 5, name: 'Direct Seguros', avatar: 'direct-l.svg', email: 'f.mitcham@kpmg.com.au' },
    { value: 6, name: 'Fénix Directo', avatar: 'fenix-directo-l.svg', email: 'dam@consilting.com' },
    { value: 7, name: 'Generali Seguros', avatar: 'logo-generali.png', email: 'ana.cf@limtel.com' },
    { value: 8, name: 'Linea Directa', avatar: 'linea-directa-l.png', email: 'miller@mapple.com' },
    { value: 9, name: 'Mapfre', avatar: 'mapfre-l.svg', email: 'miller@mapple.com' },
    { value: 10, name: 'MMT Seguros', avatar: 'mmt-l.svg', email: 'miller@mapple.com' },
    { value: 11, name: 'Mutua Madrileña', avatar: 'mutua-madrilena-l.svg', email: 'miller@mapple.com' },
    { value: 12, name: 'Pelayo', avatar: 'pelayo-l.svg', email: 'miller@mapple.com' },
    { value: 13, name: 'Qualitas Auto', avatar: 'qualitas-l.svg', email: 'miller@mapple.com' },
    { value: 14, name: 'Reale Seguros', avatar: 'reale-l.svg', email: 'miller@mapple.com' },
    { value: 15, name: 'Zurich', avatar: 'zurich-l.svg', email: 'miller@mapple.com' }
];

function tagTemplate(tagData) {
    return `
        <tag title="${(tagData.title || tagData.email)}"
                contenteditable='false'
                spellcheck='false'
                tabIndex="-1"
                class="${this.settings.classNames.tag} ${tagData.class ? tagData.class : ""}"
                ${this.getAttributes(tagData)}>
            <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
            <div class="d-flex align-items-center">
                <div class='tagify__tag__avatar-wrap ps-0'>
                    <img onerror="this.style.visibility='hidden'" class="rounded-circle w-25px me-2" src="https://getpits.com/es/wp-content/uploads/2022/07/${tagData.avatar}">
                </div>
                <span class='tagify__tag-text'>${tagData.name}</span>
            </div>
        </tag>
    `
}

function suggestionItemTemplate(tagData) {
    return `
        <div ${this.getAttributes(tagData)}
            class='tagify__dropdown__item d-flex align-items-center ${tagData.class ? tagData.class : ""}'
            tabindex="0"
            role="option">

            ${tagData.avatar ? `
                    <div class='tagify__dropdown__item__avatar-wrap me-2'>
                        <img onerror="this.style.visibility='hidden'"  class="rounded-circle w-50px me-2" src="https://getpits.com/es/wp-content/uploads/2022/07/${tagData.avatar}">
                    </div>` : ''
                }

            <div class="d-flex flex-column">
                <strong>${tagData.name}</strong>
                <span>${tagData.email}</span>
            </div>
        </div>
    `
}

// initialize Tagify on the above input node reference
var tagify = new Tagify(inputElm, {
    tagTextProp: 'name', // very important since a custom template is used with this property as text. allows typing a "value" or a "name" to match input with whitelist
    enforceWhitelist: true,
    skipInvalid: true, // do not remporarily add invalid tags
    dropdown: {
        closeOnSelect: false,
        enabled: 0,
        classname: 'users-list',
        searchKeys: ['name', 'email']  // very important to set by which keys to search for suggesttions when typing
    },
    templates: {
        tag: tagTemplate,
        dropdownItem: suggestionItemTemplate
    },
    whitelist: usersList
})

tagify.on('dropdown:show dropdown:updated', onDropdownShow)
tagify.on('dropdown:select', onSelectSuggestion)

var addAllSuggestionsElm;

function onDropdownShow(e) {
    var dropdownContentElm = e.detail.tagify.DOM.dropdown.content;

    if (tagify.suggestedListItems.length > 1) {
        addAllSuggestionsElm = getAddAllSuggestionsElm();

        // insert "addAllSuggestionsElm" as the first element in the suggestions list
        dropdownContentElm.insertBefore(addAllSuggestionsElm, dropdownContentElm.firstChild)
    }
}

function onSelectSuggestion(e) {
    if (e.detail.elm == addAllSuggestionsElm)
        tagify.dropdown.selectAll.call(tagify);
}

// create a "add all" custom suggestion element every time the dropdown changes
function getAddAllSuggestionsElm() {
    // suggestions items should be based on "dropdownItem" template
    return tagify.parseTemplate('dropdownItem', [{
        class: "addAll",
        name: "Add all",
        email: tagify.settings.whitelist.reduce(function (remainingSuggestions, item) {
            return tagify.isTagDuplicate(item.value) ? remainingSuggestions : remainingSuggestions + 1
        }, 0) + " Members"
    }]
    )
}