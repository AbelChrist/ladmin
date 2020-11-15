export default class Ladmin {

  constructor() {
    
    let _sidebarStatus = true;
    if(localStorage.getItem('ladmin-sidebar-hidden')) {
      _sidebarStatus = false;
    }
    this.sidebarToggleStatus = _sidebarStatus;
    

  }

  main() {
    this.sidebarToggleButton();
    this.menuHasChild();
    let menus = document.querySelectorAll('.ladmin-main-menu ul li.active');
    this.activeMenu(menus);
    this.sidebarToggleEvent();
    this.dropdownHandler();
  }

  /**
   * Sidebar Section
   */
  sidebarToggleButton() {
    let buttons = document.querySelectorAll('.sidebar-toggle-button');
    buttons.forEach((button) => {
      button.addEventListener('click', (e) => {
        e.preventDefault();
        this.sidebarToggleStatus = !this.sidebarToggleStatus;
        this.sidebarToggleEvent();
      });
    });
  }

  sidebarToggleEvent() {
    let aside = document.querySelector('.ladmin-main-menu');
    let main = document.querySelector('.main-content');
    
    if(this.sidebarToggleStatus) {
      aside.classList.remove('ladmin-sidebar-hidden');
      aside.classList.remove('hidden');
      main.classList.add('ml-0');
      main.classList.add('md:ml-64');
      main.classList.add('lg:ml-64');
      main.classList.add('xl:ml-64');

      // Saved
      localStorage.removeItem('ladmin-sidebar-hidden');
    } else {
      aside.classList.add('ladmin-sidebar-hidden');
      aside.classList.add('hidden');
      main.classList.remove('ml-0');
      main.classList.remove('md:ml-64');
      main.classList.remove('lg:ml-64');
      main.classList.remove('xl:ml-64');

      // Saved
      localStorage.setItem('ladmin-sidebar-hidden', true);
    }
  }

  menuHasChild() {
    let menus = document.querySelectorAll('.ladmin-main-menu ul li');
    
    menus.forEach((li) => {
      // Find child
      if(li.querySelector('ul')) {
        let anchor = li.querySelector('a');
        if(anchor.querySelector('.caret')) {
          anchor.append(this.caret('-'));
        } else {
          anchor.append(this.caret('+'));
        }

        anchor.addEventListener('click', (e) => {
          e.preventDefault();
          
          anchor.removeChild(anchor.querySelector('.caret'));
          if(li.className.split(" ").indexOf('open') == -1) {
            li.classList.add('open');
            anchor.append(this.caret('-'));
          } else {
            li.classList.remove('open');
            anchor.append(this.caret('+'));
          }
        });
        
      }
    });
  }

  activeMenu(menus) {
    menus.forEach((li) => {
      this.activeMenuParentOpen(li);
    });
  }

  activeMenuParentOpen(li) {
    if(li.parentNode.className.split(" ").indexOf('ladmin-main-menu') > -1) {
      return;
    }

    if(li.parentNode.nodeName == 'LI') {
      li.parentNode.classList.add('open');
    }

    this.activeMenuParentOpen(li.parentNode);

  }

  caret(val) {
    let caret = document.createElement('span');
    caret.classList.add('caret');
    caret.classList.add('mr-3');
    caret.innerHTML = val;
    return caret;
  }

  /**
   * Dropdown
   */
  dropdownHandler() {
    let dropdowns = document.querySelectorAll('.ladmin-dropdown');
    
    dropdowns.forEach((el) => {
      let anchor = el.querySelector('a');
      anchor.addEventListener('click', (e) => {
        e.preventDefault();

        let ul = anchor.nextElementSibling;
        if(ul.style.maxHeight) {
          ul.style.maxHeight = null;
        } else {
          ul.style.maxHeight = ul.scrollHeight + 'px';
        }

        let closeOutside = function() {
          ul.style.maxHeight = null;
          anchor.parentNode.classList.remove('ladmin-dropdown-open');
          document.removeEventListener('click', closeOutside);
        }

        setTimeout(() => {
          document.addEventListener('click', closeOutside);
        }, 100);

        if(anchor.parentNode.className.split(" ").indexOf('ladmin-dropdown-open') > -1) {
          anchor.parentNode.classList.remove('ladmin-dropdown-open');
        } else {
          anchor.parentNode.classList.add('ladmin-dropdown-open');
        }
        
      });

    });
    
  }

}