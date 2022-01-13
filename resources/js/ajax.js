function createNewConcert(name, date) {
    const formData = new FormData();
    formData.append("name", name);
    formData.append("date", date);

    return fetch("/api/concert", { method: "POST", body: formData }).then(
        (response) => response.json()
    );
}

function deleteNewConcert(id) {
    fetch("/api/deleteConcert" + id, { method: "DELETE" })
        .then((res) => res.json())
        .then((res) => console.log(res));
}
