// 获取表头
const headRow = [...document.querySelectorAll('#example1 thead th')].map(column => column.textContent.trim());

// 获取表格数据
const rows = [...document.querySelectorAll('#example1 tbody tr')].map(tr => {
    const cells = [...tr.querySelectorAll('td')].map(td => td.textContent.trim());
    const detailsButton = tr.querySelector('button[data-bs-target]');
    if (detailsButton) {
        const orderId = detailsButton.getAttribute('data-bs-target').replace('#details', '');
        const detailsModal = document.querySelector(`#details${orderId}`);
        if (detailsModal) {
            const details = [...detailsModal.querySelectorAll('ul li')].map(li => li.textContent.trim()).join('; ');
            const accountToSendMoneyTo = detailsModal.querySelector('p:nth-of-type(1)')?.textContent.trim() || '';//如果是空值會出現錯誤(抓不到資料)
            const buyerRemarks = detailsModal.querySelector('p:nth-of-type(2)')?.textContent.trim() || '';
            const orderStatus = detailsModal.querySelector('p:nth-of-type(3)')?.textContent.trim() || '';
            cells.push(details, accountToSendMoneyTo, buyerRemarks, orderStatus);
        }
    }
    return cells;
});

// 添加表头的额外列
const extendedHeadRow = [...headRow, '訂單明細', '買家選擇之匯款帳戶', '買家備註內容', '訂單狀態說明'];

// 生成 CSV 内容
const content = [extendedHeadRow, ...rows]
    .map(row => row.map(str => '"' + (str ? str.replace(/"/g, '""') : '') + '"'))
    .map(row => row.join(','))
    .join('\n');

const BOM = '\uFEFF'; // utf-8 byte-order-mark
let csvBlob; // 声明 csvBlob 变量
try {
    csvBlob = new Blob([BOM + content], { type: 'text/csv;charset=utf-8' });
} catch (e) {
    console.error('Error creating Blob:', e);
}

function showCsv() {
    console.log(content);
}

function download() {
    if (csvBlob) {
        if (window.navigator.msSaveOrOpenBlob) { 
            // IE hack; see http://msdn.microsoft.com/en-us/library/ie/hh779016.aspx
            navigator.msSaveBlob(csvBlob, 'exampleTable.csv');
        } else {
            const objectUrl = URL.createObjectURL(csvBlob);
            const a = document.createElement('a');
            a.setAttribute('href', objectUrl);
            a.setAttribute('download', 'exampleTable.csv');
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a); 
        }
    } else {
        console.error('csvBlob is not initialized.');
    }
}

// 将函数暴露到全局作用域以便按钮调用
window.showCsv = showCsv;
window.download = download;
