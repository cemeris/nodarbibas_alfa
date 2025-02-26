class StorageManager
{
  constructor(storage_name) {
    this.storage_name = storage_name;

    let data = localStorage.getItem(this.storage_name);
    if (!data) {
      this.data = {
        next_id: 1,
        entries: {}
      };
      return;
    }

    data = JSON.parse(data);
    if (!data.hasOwnProperty("next_id")) {
      this.data = {
        next_id: 1,
        entries: {}
      };
      return;
    }

    this.data = data;
  }

  getAll() {
    return this.data.entries;
  }

  add(entry) {
    let id = this.data.next_id;
    this.data.entries[id] = entry;

    this.data.next_id = this.data.next_id + 1;

    localStorage.setItem(this.storage_name, JSON.stringify(this.data));
  }
}