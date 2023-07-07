import axios from "axios";
import { handleError } from "./functions.js";
// CRUDの基本的な関数を定義

const projectName = "project";
export function getAll(endpoint) {
    return axios
        .get(`https://nakamamoji.sakura.ne.jp/${projectName}/api/${endpoint}`)
        .then((response) => response.data)
        .catch(handleError);
}

export function getOne(endpoint, id) {
    return axios
        .get(
            `https://nakamamoji.sakura.ne.jp/${projectName}/api/${endpoint}/${id}`
        )
        .then((response) => response.data)
        .catch(handleError);
}

export function create(endpoint, data) {
    return axios
        .post(
            `https://nakamamoji.sakura.ne.jp/${projectName}/api/${endpoint}`,
            data
        )
        .then((response) => response.data)
        .catch(handleError);
}

export function update(endpoint, id, data) {
    return axios
        .put(
            `https://nakamamoji.sakura.ne.jp/${projectName}/api/${endpoint}/${id}`,
            data
        )
        .then((response) => response.data)
        .catch(handleError);
}

//質問の回答の正誤判断のために追加
export function search(endpoint, params) {
    return axios
        .get(`https://nakamamoji.sakura.ne.jp/${projectName}/api/${endpoint}`, {
            params,
        })
        .then((response) => response.data)
        .catch(handleError);
}

export function remove(endpoint, id) {
    return axios
        .delete(
            `https://nakamamoji.sakura.ne.jp/${projectName}/api/${endpoint}/${id}`
        )
        .then((response) => response.data)
        .catch(handleError);
}
